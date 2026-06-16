@include('common-section.nav')
<main class="container" style="margin-top: 200px; margin-bottom: 100px;">
    <section class="shopping-cart dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-center">Shopping Cart</h2>

            </div>
            <div class="content mt-3">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>S.N</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                    $sub_total = 0;
                                @endphp

                                @forelse ($cart as $key => $item)

                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $item['photo']) }}" class="card-img-top"
                                                alt="..." style="height: 10vh">
                                        </td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['price'] }}</td>
                                        <td class="d-flex gap-2">
                                            <form action="{{ route('quantity.update', $item['id']) }}" method="POST">
                                                @csrf
                                                @method('PUT')
 
                                               <input type="hidden" name="action" value="dec">

                                                <button type="submit" class="border-0">-</button>
                                            </form>
                                            {{ $item['quintity'] }}


                                            <form action="{{ route('quantity.update', $item['id']) }}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <input type="hidden" name="action" value="inc">

                                                <button type="submit" class="border-0">+</button>
                                            </form>
                                        </td>
                                        <td> {{ $item['quintity'] * $item['price'] }}</td>
                                        <td> <a href="{{ route('addtocart.item.delete', $item['id']) }}"
                                                class="btn btn-danger btn-sm">Delete</a> </td>


                                    </tr>
                                    @php
                                        $i++;
                                        $sub_total += $item['quintity'] * $item['price'];
                                    @endphp

                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center fw-bold fs-6"> Cart is empty </td>
                                    </tr>
                                @endforelse











                            </tbody>
                        </table>

                        <a href="{{ route('addtocart.clear') }}" class="bg-danger text-white py-2 px-4">Clear Cart</a>
                    </div>



                    <div class="col-md-12 col-lg-4">



                        <div class="summary">
                            <h3>Summary</h3>
                            <div class="summary-item gap-5 d-flex"><span class="text">Subtotal</span><span
                                    class="price"> {{  $sub_total }} </span>
                            </div>

                        </div>
                        <div class="summary-item gap-5 d-flex"><span class="text">Shipping</span><span
                                class="price">{{ $shipping = 150 }}</span>
                        </div>
                        <div class="summary-item gap-5 d-flex"><span class="text">Total</span><span
                                class="price">{{ $sub_total + $shipping }}</span></div>

                        <a href="{{ route('checkout.page') }}" class="btn btn-primary mt-2">Checkout</a>


                    </div>

                </div>



            </div>
        </div>
        </div>
    </section>

</main>

@include('common-section.footer')