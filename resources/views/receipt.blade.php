<link rel="stylesheet" href="vegefoods/css/receipt/bootstrap.min.css">
<link rel="stylesheet" href="vegefoods/css/custom.css">




        

   
<body>
    <div class="newreceipt">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="logo text-center">
                        <a href="/">
                            <img src="frontend/img/shwe/logo.png" alt="">
                        </a>
                        
                        
                    </div>
                    <div class="newreceiptform">
                        <div class="first">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    
                                    <h3 class="text-center">Thank You!</h3>
                                    <p class="lead mb-5 text-center">You order was successfuly completed.</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="newsecond">
                            <h3>Order Receipt</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Date: <span>{{date("F j, Y",strtotime($order->created_at))}}</span></h4>
                                    <h4>Order ID: <span>{{$order->id}}</span></h4>
                                    <h4>Customer Number: <span>{{$order->name}}</span></h4>
                                    
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                            </div> 
                        </div>
                        <div class="newthird">
                           
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quality</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->orderProducts as $orderProduct)
                                    <tr>
                                        <td>{{$orderProduct->product->name}}</td>
                                        <td>{{$orderProduct->product->price}} MMK</td>
                                        <td>{{$orderProduct->quantity}}</td>
                                        <td>{{$orderProduct->product->price * $orderProduct->quantity}} MMK</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th scope="row"></th>
                                        <td colspan="2">Subtotal</td>
                                        <td>{{$order->subtotal}} MMK</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td colspan="2">Shipping</td>
                                        <td>2000 MMK</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td colspan="2">Total</td>
                                        <td>{{$order->total}} MMK</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-center"><a href="shop" class="btn btn-sm btn-primary">Back to Home</a></p>
                    </div>
                    
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>


    </div>
</body>
  