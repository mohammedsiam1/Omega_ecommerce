<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::whereStatus(1)->whereNull('parent_id')->get();
       
        return view('frontend.index', compact('product_categories'));
   
        return view('frontend.index');
    }

    public function product($slug)
    {
        $product = Product::with('media', 'category', 'tags', 'reviews')->withAvg('reviews', 'rating')->whereSlug($slug)
            ->Active()->HasQuantity()->ActiveCategory()->firstOrFail();
        
        $relatedProducts=Product::with('firstMedia')->whereHas('category',function($query) use ($product){
            $query->whereId($product->product_category_id);
            $query->whereStatus(true);
        })->inRandomOrder()->Active()->HasQuantity()->take(6)->get();
        
        return view('frontend.product',compact('product','relatedProducts'));
    }

    public function shop_products ($slug = null)
    {
        return view('frontend.shop',compact('slug'));
    }
    public function shop_tag($slug = null)
    {
        
        return view('frontend.shop_tag',compact('slug'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function cart()
    {
        return view('frontend.cart');
    }
   
    public function contact()
    {
        return view('frontend.contact');
    }

    public function index_2()
    {
        return view('frontend.index-2');
    }
    public function index_4()
    {
        return view('frontend.index-4');
    }
    public function index_3()
    {
        return view('frontend.index-3');
    }

     public function order_received()
    {
        return view('frontend.order-received');
    }
    public function order_tracking()
    {
        return view('frontend.order-tracking');
    }
   
    public function products_sidebar_left()
    {
        return view('frontend.products-sidebar-left');
    }
    public function products_sidebar_right()
    {
        return view('frontend.products-sidebar-right');
    }
    public function products_with_filter()
    {
        return view('frontend.products-with-filter');
    }
   
    public function wishlist()
    {
        return view('frontend.wishlist');
    }

}
