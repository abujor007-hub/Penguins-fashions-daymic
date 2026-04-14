@include('common-section.nav')

    <div class="container shadow mt-5 py-4">
        <h1 class="text-center text-uppercase fw-bold">Contact Us</h1>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">

                <img class="img-fluid" src="Icon and image/contact.jpg" alt="">

            </div>
            <div class="col">
                <form action="">
                    <label for="full_name">Full Name</label>
                    <input type="text" class="form-control mb-3" placeholder="Full Name">

                     <label for="email">Full Email</label>
                    <input type="email" class="form-control mb-3" placeholder="Full Email">

                     <label for="number">Number</label>
                    <input type="number" class="form-control mb-3" placeholder="Number">

                    <label for="message">Message</label>
                    <textarea name="message" class="form-control mb-3" id="" placeholder="Your Message"></textarea>

                    <input type="submit" class=" btn btn-primary">


                </form>
            </div>

        </div>

    </div>

 
  @include('common-section.footer')


    