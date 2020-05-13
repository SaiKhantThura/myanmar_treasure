<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->select('products.*', 'categories.name as category_name')
        ->get();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validatedData();
        $product =new Product;
        $product->name = request('name');
        $product->price = request('price');
        $product->category_id = request('category_id');
        
        $image=$request->file('image');
        
        $path='';
        if($image !== null){
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $public_path=public_path().'/assets/img/';
            $image->move($public_path, $fileNameToStore);
            $path = '/assets/img/'.$fileNameToStore;
            $product->image =$path;
        }else{
            $product->$image=$path;
        }
        
        $product->save();
        return redirect()->route('products.index')->withStatus(__('New Product created !'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->select('products.*', 'categories.name as category_name')
        ->where('products.id', '=' , $id)
        ->first();
        return view('products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validatedData();
        $product = Product::find($id);
        $product->name = request('name');
        $product->price = request('price');
        $product->category_id = request('category_id');
        
        $image=$request->file('image');
        
        $path='';
        if($image !== null){
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $public_path=public_path().'/assets/img/';
            $image->move($public_path, $fileNameToStore);
            $path = '/assets/img/'.$fileNameToStore;
            $product->image =$path;
        }else{
            $product->$image=$path;
        }
        
        $product->save();
        return redirect()->route('products.index')->withStatus(__('New Product created !'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product -> delete();
        return redirect()->route('products.index');
    }

    public function validatedData()
    {
        return request()->validate([
            'name'=>'required',
            'category_id'=>'required',
            'price'=>'required',
            'image'=>'required',

        ]); 
    }
}
