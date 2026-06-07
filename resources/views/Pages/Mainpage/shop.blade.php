

 

  @include('common-section.nav')

  <!-- man jacket start -->
    @if (!empty(('shoes')))
      
 
 <div class="container mt-5">
  

  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($Man_Jacket as $data)
        <div class="col">
    <div class="card h-100 p-3">
      <a href="{{ route('productdetails.page',$data->id) }}">

      <img src="{{ asset('storage/' . $data->Products_image) }}" class="card-img-top" alt="...">
      </a>

      <div class="card-body">
        <h5 class="card-title">{{$data->title}}</h5>
        <p class="card-text">{{$data->description}}</p>
      </div>
       <div class="d-flex justify-content-between align-items-center">
      <h3 class="text-danger">{{ $data->price }}</h3>

      <a href="{{ route('addtocart.store',$data->id) }}" class="btn btn-warning">Add to Cart</a>
    </div>
    </div>
   
  </div>
    @endforeach



 
</div>
 </div>
    @endif
    <!-- man jacket end -->


    <!-- woman jacket start -->

    @if (!empty(('Woman_Jacket')))
      
 
 <div class="container mt-5">

  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($Woman_Jacket as $data)
        <div class="col">
    <div class="card h-100 p-3">
      <a href="{{ route('productdetails.page',$data->id) }}">
      <img src="{{ asset('storage/' . $data->Products_image) }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body">
        <h5 class="card-title">{{$data->title}}</h5>
        <p class="card-text">{{$data->description}}</p>
      </div>
       <div class="d-flex justify-content-between align-items-center">
      <h3 class="text-danger">{{ $data->price }}</h3>

      <a href="{{ route('addtocart.store',$data->id) }}" class="btn btn-warning">Add to Cart</a>
    </div>
    </div>
   
  </div>
    @endforeach



 
</div>
 </div>
    @endif
    <!-- woman jacket end -->

    <!-- shoes start  -->
   @if (!empty(('shoes')))
      
 
 <div class="container mt-5">
 
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($Shoes as $data)
        <div class="col">
    <div class="card h-100 p-3">
   <a href="{{ route('productdetails.page',$data->id) }}">
      <img src="{{ asset('storage/' . $data->Products_image) }}" class="card-img-top" alt="...">
      </a>
 
      <div class="card-body">
        <h5 class="card-title">{{$data->title}}</h5>
        <p class="card-text">{{$data->description}}</p>
      </div>
       <div class="d-flex justify-content-between align-items-center">
      <h3 class="text-danger">{{ $data->price }}</h3>

      <a href="{{ route('addtocart.store',$data->id) }}" class="btn btn-warning">Add to Cart</a>
    </div>
    </div>
   
  </div>
    @endforeach



 
</div>
 </div>
    @endif
    <!-- shoes end -->



 @include('common-section.footer')