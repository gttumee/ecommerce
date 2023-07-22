
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>И-мэйлээр мэдээлэл авах</h4>
                        <p>Та и-мэйл хаягаа бүртгүүлснээр шинээр ирсэн барааны мэдээллийг и-мэйлээр авах боломжтой.
                        </p>
                        <form action="{{route('subscribe')}}" method="post" class="newsletter-inner">
                            @csrf
                            <input name="email" placeholder="И-мэйл" required="" type="email">
                            <button class="btn" type="submit">Бүртгүүлэх</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->