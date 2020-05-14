<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\BlogCategory;

class FrontendController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        $blog_categories = BlogCategory::all();
        return view('blog',compact('blog_categories'));
    }
    public function singleBlog()
    {
        return view('single_blog');
    }
    public function shop()
    {
        return view('shop');
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function productSingle(Product $product)
    {
        return view('product-single',compact('product'));
    }

    public function getAllCategories()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
    public function getProducts(Request $request)
    {
        if($request->category == 'all'){
            $products = Product::all();
        }else{
            $products = Product::where('category_id',$request->category)->get();
        }
        return response()->json($products);
    }
}