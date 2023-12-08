<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginAdmin;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ReviewController;
// use App\Http\Controllers\chech;
use App\Http\Controllers\CountController;

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
Route::get('/category', [ProductController::class, 'allProducts'])->name('allProducts');
Route::get('/category/{category_id}', [ProductController::class, 'product'])->name('category');
Route::get('/category', [ProductController::class, 'search'])->name('search');
Route::get('/category/{category_id}', [ProductController::class, 'filterByCategory'])->name('category');
Route::get('/filter-products', [ProductController::class, 'filterProducts'])->name('filterProducts');



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
// Route::get('/dashboard', [ProfileController::class, 'index'])->name('profile.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'pro'])->name('profile.index');
});

// Route::get('/cart', [CartController::class, 'cart'])->name('cart');
// Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::put('/update_quantity/{item_id}', [CartController::class, 'updateQuantity'])->name('update_quantity');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/order', [OrderController::class, 'checkout'])->name('order');


Route::post('/checkout', [OrderController::class, 'store'])->name('orders.store');
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/change', [ProfileController::class, 'change'])->name('changephoto');
Route::get('/thankyou', function () {
    return view('pages/thankyou');
});


// Paypal routes
Route::post('/buyProduct', [PaypalController::class, 'buyProduct'])->name('buyProduct');
Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel');



Route::get('/single/{id}', [ReviewController::class, 'showReviewsForProduct'])->name('single');

Route::post('/review', [ReviewController::class, 'store'])->name('review.store');


Route::get('/adminLogin', [LoginAdmin::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLoginPost', [LoginAdmin::class, 'adminLoginPost'])->name('adminLogin');
Route::get('/adminLogout', [LoginAdmin::class, 'adminLogout'])->name('adminLogout');

Route::post('/adminlogout', [LoginAdmin::class, 'adminLogout'])->name('adminlogout');

Route::get('/homedash', function () {

    return view('dashboard/home');
})->name('homedash')->middleware('isLogedin');
// Route::get('/homedash', [CountController::class, 'index'])->name('homedash')->middleware('isLogedin');
Route::get('/homedash', [CountController::class, 'index'])->name('homedash')->middleware('isLogedin');



Route::resource('admindash', AdminController::class)->middleware('isLogedin');
Route::resource('orderdash', OrderController::class)->middleware('isLogedin');
Route::resource('userdash', UserController::class)->middleware('isLogedin');
Route::resource('cartdash', CartController::class)->middleware('isLogedin');
Route::resource('productdash', ProductController::class)->middleware('isLogedin');
Route::resource('categorydash', CategoryController::class)->middleware('isLogedin');
Route::resource('reviewdash', ReviewController::class)->middleware('isLogedin');



// Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
// Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::get('/single/{id}', [ProductController::class, 'single'])->name('product.show');

Route::get('auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google');

Route::get('auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
require __DIR__.'/auth.php';
