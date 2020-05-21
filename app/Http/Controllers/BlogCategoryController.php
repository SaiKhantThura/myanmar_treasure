<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bcs = BlogCategory::all();
        return view('blog_categories.index',compact('bcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BlogCategory::create($this->validatedData());
        return redirect()->route('BlogCategories.index')->withStatus(__('New Blog category created !'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $BlogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $BlogCategory)
    {
        return view('blog_categories.edit',compact('BlogCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $BlogCategory)
    {
        $this->validatedData();
        $BlogCategory->name = request("name");
        $BlogCategory->save();
        return redirect()->route('BlogCategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $BlogCategory)
    {
        $BlogCategory->delete();
        return redirect()->route('BlogCategories.index');
    }

    public function validatedData()
    {
        return request()->validate([
            'name'=>'required'
        ]); 
    }
}
