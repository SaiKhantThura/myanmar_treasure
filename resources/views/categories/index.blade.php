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
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{route('categories.create')}}" class="btn btn-sm btn-primary"
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
                                <th scope="col">Name</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $category)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$category->name}}</td>
                                <td class="text-right">
                                    <a class="btn btn-icon btn-primary btn-sm" type="button" href="{{route('categories.edit',$category->id)}}">
                                        <span class="btn-inner--icon"><i class="ni ni-settings-gear-65"></i></span>     
                                    </a>  
                                    <form
                                            method="POST"
                                            action="{{route('categories.destroy',$category->id)}}"
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

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush