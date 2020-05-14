<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('blogs')
        ->join('blog_categories', 'blog_categories.id', '=', 'blogs.blog_category_id')
        ->select('blogs.*', 'blog_categories.name as name')
        ->get();
        return view('blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bcs = BlogCategory::all();
        return view('blogs.create',compact('bcs'));
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
        $blog =new Blog;
        $blog->title = request('title');
        $blog->description = request('description');
        $blog->blog_category_id = request('blog_category_id');
        
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
            $blog->image =$path;
        }else{
            $blog->$image=$path;
        }

        $blog->save();
        return redirect()->route('blogs.index')->withStatus(__('New Product created !'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bcs = BlogCategory::all();
        $blogs = DB::table('blogs')
        ->join('blog_categories', 'blog_categories.id', '=', 'blogs.blog_category_id')
        ->select('blogs.*', 'blog_categories.name as name')
        ->where('blogs.id', '=' , $id)
        ->first();
        return view('blogs.edit',compact('blogs','bcs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validatedData();
        $blog =Blog::find($id);
        $blog->title = request('title');
        $blog->description = request('description');
        $blog->blog_category_id = request('blog_category_id');
        
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
            $blog->image =$path;
        }else{
            $blog->$image=$path;
        }

        $blog->save();
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog =Blog::find($id);
        $blog->delete();
        return redirect()->route('blogs.index');
    }
    public function validatedData()
    {
        return request()->validate([
            'title'=>'required',
            'blog_category_id'=>'required',
            'description'=>'required',
            'image'=>'required',

        ]); 
    }
}
