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
                        
                    </div>
                </div>

                <div class="col-12"></div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">subject Category</th>
                                <th scope="col">message</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($feedbacks as $key=> $feedback)

                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td>{{$feedback->name}}</td>
                                    <td>{{$feedback->email}}</td>
                                    <td>{{$feedback->subject}}</td>
                                    <td>{{$feedback->message}}</td>
                                    <td>
                                    <form
                                            method="POST"
                                            action="{{route('feedback.destroy',$feedback->id)}}"
                                            style="display: inline-block;"
                                        >
                                            @csrf @method('DELETE')
    
                                            <button
                                                type="submit"
                                                rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon"
                                                onclick="return confirm('Are You Confirm')"
                                            >
                                            <span class="btn-inner--icon"><i class="ni ni-settings-gear-65"></i></span>
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

                            