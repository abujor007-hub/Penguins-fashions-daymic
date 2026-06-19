@extends('layout.layout')

@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Order Info</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active">Order Info</li>
            </ol>

           <div class="container mt-5 mb-5">
    
      <div class="card mb-4 mt-3">
    <div class="card-header">
        Update Order Status
    </div>

    <div class="card-body">

        <form action="{{ route('order.status.update',$order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <select name="status" class="form-control mb-3">

                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>
                    Pending
                </option>

                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>
                    Processing
                </option>

                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>
                    Completed
                </option>

                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>
                    Cancelled
                </option>

            </select>

            <button type="submit" class="btn btn-success">
                Update Status
            </button>
        </form>

    </div>
</div>

    
           
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
                   @php $i = 1; @endphp

@foreach($order->items as $item)

<tr>
    <td>{{ $loop->iteration }}</td>

    <td>{{ $item->product->title ?? 'N/A' }}</td>

    <td>৳{{ $item->price }}</td>

    <td>{{ $item->quintity }}</td>

    <td>৳{{ $item->price * $item->quintity }}</td>

    <td>
        <img src="{{ asset('storage/'.$item->product->Products_image) }}"width="80">

           
    </td>
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
                <a href="{{ route('order.page') }}" class="btn btn-primary">
                    Order Page
                </a>
            </div>
    
        </div>
    </div>
    


        </div>

    </main>
    </div>
    <!-- main content end -->
@endsection