<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Order;
use Auth;
class PaypalController extends Controller
{
    public function buyProduct(Request $request)
    {

        session()->flash('totalPrice', $request->input('totalPrice'));
        session()->flash('address', $request->input('address'));

        

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->totalPrice,
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // buy the product if the paymnet is successful
            $totlPrice = session('totalPrice');
            $address = session('address');
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->orderAddress = $address;
            $order->orderStatus = 'pending';
            $order->orderDate = Carbon::now();
            $order->totalPrice = $totlPrice;
            $order->orderPayment = 'paypal';

            Cart::truncate();
            


            $order->save();
            return redirect('/')->with('success', 'Order placed successfully!');
        } else {
            return redirect()->back();
        }
    }

    public function cancel()
    {
        return "Payment is cancelled!";
    }
}