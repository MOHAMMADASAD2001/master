<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('pages/index');
// });
Route::get('/', [CategoryController::class, 'category'])->name('category');
Route::get('/category', [ProductController::class, 'Product'])->name('Product');
Route::get('/single/{id}', [ProductController::class, 'single'])->name('product.show');


Route::controller(ContactController::class)->group(function () {
    Route::get('contact', 'index');
    Route::post('store-contacts', 'store');
});
// Route::get('/category', function () {
//     return view('pages/cat');
// });
// Route::get('/product', function () {
//     return view('pages/single');
// });
// Route::get('/cart', function () {
//     return view('pages/cart');
// });
Route::get('/checkout', function () {
    return view('pages/checkout');
});
Route::get('/dash', function () {
    return view('dashboard/home');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
// Route::get('/checkout', function () {
//     return view('pages/checkout');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('productdash', ProductController::class);
Route::resource('categorydash', CategoryController::class);
// Route::get('/cart', [CartController::class, 'cart'])->name('cart');
// Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::put('/update_quantity/{item_id}', [CartController::class, 'updateQuantity'])->name('update_quantity');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/order', [OrderController::class, 'checkout'])->name('order');


// Route::get('/single', function () {
//     return view('single');
// });
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout/process', 'CheckoutController@process')->name('checkout.process');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/change', [ProfileController::class, 'change'])->name('changephoto');

require __DIR__.'/auth.php';
