@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Blogs</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{route('blogs.create')}}" class="btn btn-sm btn-primary"
                                >Add</a
                            >
                        </div>
                    </div>
                </div>

                <div class="col-12"></div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Blog Category</th>
                                <th scope="col">description</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $key => $blog)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                <a href="{{$blog->image}}" target="blank">
                                    <img class="avatar border-gray" src="{{$blog->image}}" style="object-fit: cover;" alt="...">
                                </a>
                                </td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->name}}</td>
                                <td>{{$blog->description}}</td>
                                <td class="text-right">
                                    <a class="btn btn-icon btn-primary btn-sm" type="button" href="{{route('blogs.edit',$blog->id)}}">
                                        <span class="btn-inner--icon"><i class="ni ni-settings-gear-65"></i></span>     
                                    </a>  
                                    <form
                                            method="POST"
                                            action="{{route('blogs.destroy',$blog->id)}}"
                                            style="display: inline-block;"
                                        >
                                            @csrf @method('DELETE')
    
                                            <button
                                                type="submit"
                                                rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon"
                                                onclick="return confirm('Are You Confirm')"
                                            >
                                            <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                                            </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav
                        class="d-flex justify-content-end"
                        aria-label="..."
                    ></nav>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
    </div>
@endsection