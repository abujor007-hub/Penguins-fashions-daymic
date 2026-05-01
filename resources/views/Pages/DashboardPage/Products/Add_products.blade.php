@extends('layout.layout')

@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add Proudcts Page</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Product</li>
            </ol>

            <div class="container py-4 shadow">
                <h1 class="text-center fw-bold">Add Products</h1>

                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row row-cols-1 row-cols-md-2">
                        <div class=" col mt-1">
                            <label class="" for="inputGroupSelect01">Cagagory</label>
                            <select class="form-select" id="inputGroupSelect01" name="catagory">
                                <option selected>Choose Catagory</option>
                                @if (count($catagory) > 0)
                                    @foreach ($catagory as $data)
                                        <option value="{{ $data->add_catagory }}">{{ $data->add_catagory }}</option>
                                    @endforeach

                                @endif






                            </select>
                        </div>


                        <div class="col mt-1">
                            <label for="title">Title</label>
                            <input type="text" placeholder="title" id="title" name="title" class=" form-control">
                        </div>

                        <div class="col mt-1">
                            <label for="status">Status</label>
                            <input type="text" placeholder="status" id="status" name="status" class=" form-control">
                        </div>

                        <div class="col mt-1">
                            <label for="price">Price</label>
                            <input type="number" placeholder="price" id="price" name="price" class=" form-control">
                        </div>

                        <div class="col mt-1">
                            <label for="dis_price">dis_price</label>
                            <input type="number" placeholder="dis_price" id="dis_price" name="dis_price"
                                class=" form-control">
                        </div>

                        <div class="col mt-1">
                            <label for="quintity">Quintity</label>
                            <input type="number" placeholder="quintity" id="quintity" name="quintity" class=" form-control">
                        </div>

                        <div class="col mt-1 ">
                            <h3>Image</h3>
                            <img src="" alt="">
                            <input type="file" name="products_image" id="products_image">
                        </div>

                        <div class="col mt-1 ">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class=" form-control"></textarea>
                        </div>

                    </div>
                    <input type="submit" class="btn btn-success mt-3" style="display: block; margin: 0px auto;">
                </form>

            </div>





        </div>

    </main>
    </div>
    <!-- main content end -->
@endsection