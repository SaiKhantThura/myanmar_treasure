<?php

namespace App\Http\Controllers;

use App\Blog_Category;
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
        $bcs = Blog_Category::all();
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
        Blog_Category::create($this->validatedData());
        return redirect()->route('blogcaregories.index')->withStatus(__('New Blog category created !'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog_Category  $blog_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Blog_Category $blog_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog_Category  $blog_Category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bc = Blog_Category::find($id);
        return view('blog_categories.edit',compact('bc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog_Category  $blog_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validatedData();
        $bc = Blog_Category::Find($id);
        $bc->name = request("name");
        $bc->save();
        return redirect()->route('blogcaregories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog_Category  $blog_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bc = Blog_Category::Find($id);
        $bc->delete();
        return redirect()->route('blogcaregories.index');
    }
    public function validatedData()
    {
        return request()->validate([
            'name'=>'required'
        ]); 
    }
}
