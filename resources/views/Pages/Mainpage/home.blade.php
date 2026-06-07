@include('common-section.nav')

    <!-- hero section start -->
     <div class="hero-container container  ">
      <div class="row  align-items-center slider">

        <div class="col mt-5">
          <div class="">
  
  <div class="card-body">
    <h1 class="card-title text-success">Be The Penguines of winter</h1>
    <p class="card-text mt-2">With supporting text below as a natural lead-in to additional content.</p>
    <h3 class="text-warning">Price:$500</h3>
    <a href="#" class="btn btn-primary mt-2">BUY NOW</a>
  </div>
</div>
        </div>
        <div class="col ">
          <img  class="img-fluid" src="{{ asset('Icon and image/slider-image-1.png') }}" alt="">
        </div>
         <div class="col mt-5">
          <div class="">
  
  <div class="card-body">
    <h1 class="card-title text-success">Be The Penguines of winter</h1>
    <p class="card-text mt-2">With supporting text below as a natural lead-in to additional content.</p>
    <h3 class="text-warning">Price:$500</h3>
    <a href="#" class="btn btn-primary mt-2">BUY NOW</a>
  </div>
</div>
        </div>
        <div class="col ">
          <img  class="img-fluid" src="{{ asset('Icon and image/slider-image-1.png') }}" alt="">
        </div>

         <div class="col mt-5">
          <div class="">
  
  <div class="card-body">
    <h1 class="card-title text-success">Be The Penguines of winter</h1>
    <p class="card-text mt-2">With supporting text below as a natural lead-in to additional content.</p>
    <h3 class="text-warning">Price:$500</h3>
    <a href="#" class="btn btn-primary mt-2 ">BUY NOW</a>
  </div>
</div>
        </div>
        <div class="col">
          <img  class="img-fluid" src="{{ asset('Icon and image/slider-image-1.png') }}" alt="">
        </div>


         



      </div>
      
     </div>
    <!-- hero section end -->

    

    <!-- slick slider link start -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <!-- slick slider link end -->


    <!-- man jacket start -->
    @if (!empty(('shoes')))
      
 
 <div class="container mt-5">
  <div class="header">
    <h1>Man Jacket</h1>
  </div>

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
  <div class="header">
    <h1>Woman Jacket</h1>
  </div>

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
  <div class="header">
    <h1>Shoes</h1>
  </div>

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