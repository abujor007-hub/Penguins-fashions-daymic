@include('common-section.nav')

<!-- products info start -->
<div class="container mt-5 py-4">
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col">
            <img src="{{ asset('storage/' . $products->Products_image) }}" alt="" style="width: 550px; height: 600px;">


        </div>
        <div class="col">
            <div class="div mb-3">
                <h4> Cetagory : {{ $products->catagory }}</h4>

            </div>

            <div class="div mb-3">
                <h4>Price :${{ $products->price }}</h4>

            </div>

            <div class="div mb-3">
                <h4> Discounted Price :${{ $products->dis_price }}</h4>

            </div>

            <div class="div mb-3">
                <h4> Stoke :{{ $products->status }} </h4>

            </div>


            <div class="div mb-3">
                <h4>{{ $products->title }}</h4>

            </div>

            <div class="div mb-3">

                <p>{{ $products->description }}</p>

            </div>

            <div class="div mb-3">
                <h4> Quantity: {{ $products->quintity }} </h4>
                

                <div class="div mb-3">
                    <form action="{{ route('addtocart.store', $products->id) }}" method="get" class="d-flex gap-5">
                        @csrf

                        <button type="submit" name="action" value="cart" class="btn btn-primary">
                            Add to Cart
                        </button>

                        <button type="submit" name="action" value="checkout" class="btn btn-warning">
                            Buy Now
                        </button>
                    </form>


                </div>



            </div>
        </div>

    </div>

</div>
<!-- products info end -->
@include('common-section.footer')