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
                            <h3 class="mb-0">Orders</h3>
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
                                <th scope="col">Address</th>
                                <th scope="col">phone</th>
                                <th scope="col">Products</th>
                                <th scope="col">Total</th>
                                <th scope="col">Time</th>
                                <th scope="col">stutus</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key => $order)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->phone}}</td>
                                <td>
                                    @foreach($order->orderProducts as $orderProduct)
                                        <span class="badge badge-pill badge-default">{{$orderProduct->product->name}} x {{$orderProduct->quantity}}</span>
                                    @endforeach
                                </td>
                                <td>{{$order->total}}</td>
                                <td><span class="badge badge-pill badge-default">{{$order->created_at->diffForHumans()}}</span></td>
                                <td><span class="badge badge-pill badge-{{$order->status =='new'? 'default' : 'success'}}">{{$order->status}}</span></td>
                                <td>
                                    @if($order->status == 'new')
                                    <form
                                        method="POST"
                                        action="{{route('order_accepted',$order->id)}}"
                                        style="display: inline-block;"
                                    >
                                        @csrf @method('PUT')

                                        <button
                                            type="submit"
                                            rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon"
                                            onclick="return confirm('Are You Confirm')"
                                        >
                                        <i class="ni ni-check-bold"></i>
                                        </button>
                                    </form>
                                    @endif
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