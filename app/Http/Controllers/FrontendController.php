<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\BlogCategory;
use App\Blog;
use App\Order;
use App\Feedback;
use Illuminate\Support\Facades\DB;
use App\Firebase\SendNotification;
class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $needToClear = $request->session()->get('auth');
        return view('welcome',compact('needToClear'));
    }
    public function receipt(Request $request)
    {
        $order = Order::find($request->input('order'));
        return view('receipt',compact('order'));
    }
    public function about()
    {
        return view('about');
    }

    public function cleared(Request $request)
    {
        $request->session()->put('auth', false);
        return 'true';
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        $all_blogs=Blog::all();
        $blog_categories = BlogCategory::all();
        $blogs = DB::table('blogs')
        ->join('blog_categories', 'blog_categories.id', '=', 'blogs.blog_category_id')
        ->select('blogs.*', 'blog_categories.name as name')
        ->get();
        return view('blog',compact('blog_categories','blogs','all_blogs'));
    }
    public function blogwithcategory($id)
    {
        $all_blogs=Blog::all();
        $blog_categories = BlogCategory::all();
        $blogs = DB::table('blogs')
        ->join('blog_categories', 'blog_categories.id', '=', 'blogs.blog_category_id')
        ->select('blogs.*', 'blog_categories.name as name','blog_categories.id as blog_category_id')
        ->where('blog_category_id', '=' , $id)
        ->get();
        return view('blog',compact('blog_categories','blogs','all_blogs'));
    }
    public function singleBlog($id)
    {
        $all_blogs=Blog::all();
        $blog_categories = BlogCategory::all();
        $blog = DB::table('blogs')
        ->join('blog_categories', 'blog_categories.id', '=', 'blogs.blog_category_id')
        ->select('blogs.*', 'blog_categories.name as name')
        ->where('blogs.id', '=' , $id)
        ->first();
        return view('single_blog',compact('blog','blog_categories','all_blogs'));
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

    public function getProductsDetails(Product $product)
    {
        return response()->json($product);
    }

    public function savingfeedback(Request $request)
    {    
        Feedback::create($this->feedbackValidatedData());
        return redirect()->route('index')->withStatus(__('Your feedback had been sent'));
    
    }
    public function ramdomProduct(Request $request)
    {    
        $products = Product::all()->random(8);
        return response()->json($products);
    
    }
    public function feedbackValidatedData()
    {
        return request()->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]); 
    }
    
}
