<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\SupervisorController;
use App\Http\Controllers\Backend\PaymentMethodController;
use App\Http\Controllers\Backend\ProductCouponController;
use App\Http\Controllers\Backend\ProductReviewController;
use App\Http\Controllers\Backend\CustomerAddressController;
use App\Http\Controllers\Backend\ShippingCompanyController;
use App\Http\Controllers\Backend\ProductCategoriesController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomerController ;

##----------------- Routs For Frontend ----------------
Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
Route::get('/index',[FrontendController::class,'index'])->name('index');
Route::get('/about',[FrontendController::class,'about'])->name('frontend.about');
Route::get('/cart',[FrontendController::class,'cart'])->name('frontend.cart');
Route::group(['middleware'=>'auth'],function(){

Route::get('/dashboard', [FrontendCustomerController::class, 'dashboard'])->name('customer.dashboard');
Route::get('/profile', [FrontendCustomerController::class, 'profile'])->name('customer.profile');
Route::patch('/profile', [FrontendCustomerController::class, 'update_profile'])->name('customer.update_profile');
Route::get('/profile/remove-image', [FrontendCustomerController::class, 'remove_profile_image'])->name('customer.remove_profile_image');
Route::get('/addresses', [FrontendCustomerController::class, 'addresses'])->name('customer.addresses');

Route::get('/orders', [FrontendCustomerController::class, 'orders'])->name('customer.orders');

Route::group(['middleware' => 'check_cart'], function () {
Route::get('/checkout',[PaymentController::class,'checkout'])->name('frontend.checkout');
Route::post('/checkout/payment', [PaymentController::class, 'checkout_now'])->name('checkout.payment');
Route::get('/checkout/{order_id}/cancelled', [PaymentController::class, 'cancelled'])->name('checkout.cancel');
Route::get('/checkout/{order_id}/completed', [PaymentController::class, 'completed'])->name('checkout.complete');
Route::get('/checkout/webhook/{order?}/{env?}', [PaymentController::class, 'webhook'])->name('checkout.webhook.ipn');

});
});
Route::get('/contact',[FrontendController::class,'contact'])->name('frontend.contact');
Route::get('/index_2',[FrontendController::class,'index_2'])->name('frontend.index_2');
Route::get('/index_3',[FrontendController::class,'index_3'])->name('frontend.index_3');
Route::get('/index_4',[FrontendController::class,'index_4'])->name('frontend.index_4');
Route::get('/order_received',[FrontendController::class,'order_received'])->name('frontend.order_received');
Route::get('/order_tracking',[FrontendController::class,'order_tracking'])->name('frontend.order_tracking');
Route::get('/product/{slug?}',[FrontendController::class,'product'])->name('frontend.product');
Route::get('/products_sidebar_left',[FrontendController::class,'products_sidebar_left'])->name('frontend.products_sidebar_left');
Route::get('/products_sidebar_right',[FrontendController::class,'products_sidebar_right'])->name('frontend.products_sidebar_right');
Route::get('/products_with_filter',[FrontendController::class,'products_with_filter'])->name('frontend.products_with_filter');
Route::get('/shop/{slug?}',[FrontendController::class,'shop_products'])->name('frontend.products');
Route::get('/shop/tags/{slug}',[FrontendController::class, 'shop_tag'])->name('frontend.shop_tag');
Route::get('/wishlist',[FrontendController::class,'wishlist'])->name('frontend.wishlist');
##----------------- End Routs For Frontend ----------------


##----------------- Routs For Backend ----------------
Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
    Route::group(['middleware'=>'guest'],function(){
    Route::get('/login',[BackendController::class,'login'])->name('login');
    Route::get('/forgot_password',[BackendController::class,'forgot_password'])->name('forgot-password');
});
Route::group(['middleware'=>['roles']],function (){ 
    Route::get('/',[BackendController::class,'index'])->name('index_route');
    Route::get('/index',[BackendController::class,'index'])->name('index');
    Route::get('/account_settings', [BackendController::class, 'account_settings'])->name('account_settings');
    Route::post('/admin/remove-image', [BackendController::class, 'remove_image'])->name('remove_image');
    Route::patch('/account_settings', [BackendController::class, 'update_account_settings'])->name('update_account_settings');
    Route::post('/product_categories/remove-image', [ProductCategoriesController::class, 'remove_image'])->name('product_categories.remove_image');
    Route::post('/products/remove-image', [ProductController::class, 'remove_image'])->name('products.remove_image');
    Route::resource('product_categories', ProductCategoriesController::class);
    Route::resource('products',ProductController::class);
    Route::resource('tags', TagController::class);
    Route::resource('product_coupons', ProductCouponController::class);
    Route::resource('product_reviews', ProductReviewController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('customer_addresses', CustomerAddressController::class);
    Route::get('/customers/get_customers', [CustomerController::class, 'get_customers'])->name('customers.get_customers');
    Route::post('/customers/remove-image', [CustomerController::class, 'remove_image'])->name('customers.remove_image');
    Route::resource('orders', OrderController::class);
    Route::post('/supervisors/remove-image', [SupervisorController::class, 'remove_image'])->name('supervisors.remove_image');
    Route::resource('supervisors', SupervisorController::class);
    Route::resource('countries', CountryController::class);
    Route::get('states/get_states', [StateController::class, 'get_states'])->name('states.get_states');
    Route::resource('states', StateController::class);
    Route::get('cities/get_cities', [CityController::class, 'get_cities'])->name('cities.get_cities');
    Route::resource('cities', CityController::class);
    Route::resource('shipping_companies', ShippingCompanyController::class);
    Route::resource('payment_methods', PaymentMethodController::class);

    });
}); 


Auth::routes(['verify' => true]);



