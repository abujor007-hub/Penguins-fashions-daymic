@extends('layout.layout')

@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Products</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Product</li>
            </ol>

            <div class="container py-4 shadow">
                <h1 class="text-center fw-bold">Add Products</h1>

                <form action="{{ route('products.update.page', $products->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row row-cols-1 row-cols-md-2">
                        <div class=" col mt-1">
                            <label class="" for="inputGroupSelect01">Cagagory</label>
                            <select class="form-select" id="inputGroupSelect01" name="catagory">
                                <option selected>Choose Catagory</option>
                          
                                    @foreach ($catagory as $data)
                                        <option value="{{ $data->add_catagory }}" @if ($data->add_catagory == $products->catagory) selected @endif>{{ $data->add_catagory }}</option>
                                    @endforeach

                           





                            </select>
                        </div>


                        <div class="col mt-1">
                            <label for="title">Title</label>
                            <input type="text" placeholder="title" id="title" name="title" class=" form-control" value="{{ $products->title }}">
                        </div>

                        <div class="col mt-1">
                            <label for="status">Status</label>
                            <input type="text" placeholder="status" id="status" name="status" class=" form-control" value="{{ $products->status }}">
                        </div>

                        <div class="col mt-1">
                            <label for="price">Price</label>
                            <input type="number" placeholder="price" id="price" name="price" class=" form-control" value="{{ $products->price }}">
                        </div>

                        <div class="col mt-1">
                            <label for="dis_price">dis_price</label>
                            <input type="number" placeholder="dis_price" id="dis_price" name="dis_price"
                                class=" form-control" value="{{ $products->dis_price }}">
                        </div>

                        <div class="col mt-1">
                            <label for="quintity">Quintity</label>
                            <input type="number" placeholder="quintity" id="quintity" name="quintity" class=" form-control" value="{{ $products->quintity }}">
                        </div>

                        <div class="col mt-1 ">
                            <h3>Image</h3>
                            <img src="{{ asset('storage/' . $products->Products_image) }}" alt="" style="height: 30vh">
                            <input type="file" name="products_image" id="products_image" >
                        </div>

                        <div class="col mt-1 ">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" >{{ $products->description }}</textarea>
                        </div>

                    </div>
                    <input value="Update" type="submit" class="btn btn-success mt-3 " style="display: block; margin: 0px auto;">
                </form>

            </div>





        </div>

    </main>
    </div>
    <!-- main content end -->
@endsection