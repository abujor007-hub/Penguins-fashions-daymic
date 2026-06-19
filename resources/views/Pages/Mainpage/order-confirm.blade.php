@include('common-section.nav')

 <div class="container mt-5 mb-5">
    
        <div class="card p-4">
    
            {{-- SUCCESS MESSAGE --}}
            <div class="alert alert-success text-center">
                <h2>🎉 Order Confirmed Successfully!</h2>
                <p>Thank you for your order</p>
            </div>

            {{-- SHOP INFO --}}
<h4 class="mb-3">Shop Information</h4>

<table class="table table-bordered">
    <tr>
        <th>Shop Name</th>
        <td>PandaShop</td>
    </tr>

    <tr>
        <th>Phone</th>
        <td>+8801712345678</td>
    </tr>

    <tr>
        <th>Email</th>
        <td>nexxoom99@gmia.com</td>
    </tr>

    <tr>
        <th>Address</th>
        <td>Dhaka Bangladesh</td>
    </tr>

    <tr>
        <th>Website</th>
        <td>www.nexxoom.com</td>
    </tr>
</table>
    
            {{-- USER INFO --}}
            <h4 class="mb-3">Customer Information</h4>
    
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $order->full_name }}</td>
                </tr>
    
                <tr>
                    <th>Phone</th>
                    <td>{{ $order->phone }}</td>
                </tr>
    
                <tr>
                    <th>Email</th>
                    <td>{{ $order->email }}</td>
                </tr>
    
                <tr>
                    <th>Address</th>
                    <td>{{ $order->address }}</td>
                </tr>
    
                @if($order->message)
                <tr>
                    <th>Message</th>
                    <td>{{ $order->message }}</td>
                </tr>
                @endif
    
                 <tr>
                    <th>Order Status</th>
                    <td>{{ $order->status }}</td>
                </tr>

                <tr>
                    <th>Payment Method</th>
                    <td>{{ $order->payment_method }}</td>
                </tr>
            </table>
    
            {{-- PRODUCT INFO --}}
            <h4 class="mt-4 mb-3">Ordered Products</h4>
    
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
    
                <tbody>
      @foreach($order->items as $item)

<tr class="text-center">
    <td>{{ $loop->iteration }}</td>

    <td>{{ $item->product->title }}</td>

    <td>৳{{ $item->price }}</td>

    <td>{{ $item->quintity }}</td>

    <td>৳{{ $item->price * $item->quintity }}</td>
</tr>

@endforeach

                </tbody>
            </table>
    
            {{-- TOTAL --}}
            <div class="row justify-content-end">
                <div class="col-md-4">
    
                    <table class="table table-bordered">
                        <tr>
                            <th>Subtotal</th>
                            <td>৳{{ $order->subtotal }}</td>
                        </tr>
    
                        <tr>
                            <th>Shipping</th>
                            <td>৳{{ $order->shipping }}</td>
                        </tr>
    
                        <tr class="table-success">
                            <th>Grand Total</th>
                            <td><b>৳{{ $order->total }}</b></td>
                        </tr>
    
                    </table>
    
                </div>
            </div>
    
            {{-- BUTTON --}}
            <div class="text-center mt-4">
                <a href="{{ route('home.page') }}" class="btn btn-primary">
                    Continue Shopping
                </a>
            </div>
    
        </div>
    </div>
    
@include('common-section.footer')