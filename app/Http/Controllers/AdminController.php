<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        return view('dashboard.admin', compact('admin'));

    }

    public function create()
    {
        return view('dashboard.createadmin');

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',

        ]);


        $admin = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $admin['image'] = $filename;
        }


        Admin::create($admin);

        return redirect('admindash')
            ->with('success', 'admin added successfully');
    }



    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('dashboard.editadmin', compact('admin'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $admin->image = $filename;
        }

        $admin->save();
        return redirect('admindash')->with('success', 'admin updated successflly');

    }

    public function loginSubmit(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return view('dashboard.home'); // Assuming your home dashboard view is located at 'dashboard/home.blade.php'
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid email or password']); // Redirect back with error message
    }

    public function destroy($id)
    {
        Admin::find($id)->delete();
        Admin::destroy($id);
        return redirect('admindash')->with('flash_message', 'Admin deleted successfully');
    }

}