@extends('layout.layout')

@section('content')

  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Products List Page</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">Products List</li>
      </ol>


      <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

          @foreach ($products as $data)
            <div class="col">
            <div class="card h-80 gap-2">
              <img src="{{ asset('storage/' . $data->Products_image) }}" alt="..." style="width: 410px; height: 300px;" >
              <div class="card-body">
                <h5 class="card-title">Title: {{ $data->title }}</h5>
                <p class="card-text">Description: {{ $data->description }}</p>
                <p>Price: {{ $data->price }}</p>
                <p>Quantity: {{ $data->quintity }}</p>
                <p>Discount_price: {{ $data->dis_price }}</p>
                <p>Catagory: {{ $data->catagory }}</p>
                <p>Status: {{ $data->status }}</p>
              </div>
              <div>

                <div class="btn-groups d-flex justify-content-between p-3">
                  <a href="{{ route('products.edit.page',$data->id) }}" class="btn btn-warning">Edit</a>
                  <form action="{{ route('products.delelte.page',$data->id) }}" method="POST">
                    @csrf
                    @method('Delete')
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                </div>
                
              </div>
            </div>
          </div>
          @endforeach


          






        </div>

      </div>


    </div>

  </main>
  </div>
  <!-- main content end -->
@endsection