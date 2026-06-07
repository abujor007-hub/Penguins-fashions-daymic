@include('common-section.nav')
<main class="page ">
    <section class="shopping-cart dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-center">Cheackout </h2>

            </div>
            <div class="content mt-3">
                <div class="row">
                    <div class="row row-cols-md-2 ">
                        <div class="cold-md-6">
                            <div class="header-youraddress">
                                <h2>Your Address</h2>
                            </div>
                            <form action="" method="POST">
                                @csrf

                                <div class="col-md-12">
                                    <label for="full name">full name*</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="phone">Phone*</label>
                                    <input type="text" name="phone" id="phone" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="email">Email*</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                                    <label class="form-check-label" for="radioDefault1">
                                        Insideof Dhaka 80 TK
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2"
                                        checked>
                                    <label class="form-check-label" for="radioDefault2">
                                        Out side of Dhaka 150 Tk
                                    </label>
                                </div>

                                <div class="mt-3 col-md-12">
                                    <label for="address">
                                        <h3>Address</h3>
                                    </label>
                                    <textarea class="form-control" placeholder="Address" id="address" name="address"
                                        style="height: 100px"></textarea>

                                </div>
                                <div class=" mt-3 col-md-12">
                                    <label for="message">
                                        <h3>Message</h3>
                                    </label>
                                    <textarea class="form-control" placeholder="Message" id="message" name="message"
                                        style="height: 100px"></textarea>

                                </div>
                                <input type="submit" class="btn btn-danger mt-5">
                            </form>
                        </div>


<div class="col-md-12 col-lg-4 mt-5" style="width: 400px;">
        <h2 class="text-secondary mb-4">Your cart</h2>

    <div class="border ">

        @php
        $i=1;
            $sub_total = 0;
        @endphp

        @forelse($cheackout as $item)

            <div class="d-flex align-items-center p-3 border-bottom">
              <p class="me-2">{{ $i }}</p>
              
                <img src="{{ asset('storage/' . $item['photo']) }}"
                    alt=""
                    width="50">

                <div class="ms-3 flex-grow-1">
                    <a href="#" class="text-decoration-none fs-5">
                        {{ $item['name'] }}
                    </a>

                    <div class="text-end text-secondary">
                        {{ $item['price'] }} ৳ X {{ $item['quintity'] }}
                        =
                        {{ $item['price'] * $item['quintity'] }} ৳
                    </div>
                </div>
            </div>

            @php
            $i++;
                $sub_total += $item['price'] * $item['quintity'];
            @endphp

        @empty

            <div class="p-3 text-center">
                Cart Empty
            </div>

        @endforelse

        <div class="d-flex justify-content-between p-3 border-bottom">
            <span class="text-success">Sub Total</span>
            <span class="text-success">{{ $sub_total }} ৳</span>
        </div>

        <div class="d-flex justify-content-between p-3 border-bottom">
            <span class="text-success">Shipping Charge</span>
            <span class="text-success">{{ $shipping=150 }} ৳</span>
        </div>

        <div class="d-flex justify-content-between p-3 fw-bold">
            <span>Total</span>
            <span>{{ $sub_total + $shipping }} ৳</span>
        </div>

    </div>
</div>

                    </div>



                </div>
            </div>


        </div>
    </section>

</main>

@include('common-section.footer')