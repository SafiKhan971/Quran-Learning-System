@include('user/header')
@include('user/navigation2')

<style>
    @media only screen and (max-width: 480px) {
        .subtitle {
            font-size: 14px;
        }
    }
</style>

<main>
    <!-- pageheader -->
    <section class="pt-4 pb-4 pb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-4">
                        <h1 class="display-6 fw-semi-bold">Payments</h1>
                        <h2 class="subtitle">We accept Visa, Master, PayPal, Western Union, EasyPaisa & JazzCash </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pageheader-->
    <section class="pt-4 pb-4 pb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="{{asset('assets/images/visa.png')}}" alt="">
                </div>
                <div class="col">
                    <img class="img-fluid" src="{{asset('assets/images/mastercard.png')}}" alt="">
                </div>
                <div class="col">
                    <img class="img-fluid" src="{{asset('assets/images/paypal.png')}}" alt="">
                </div>
                <div class="col">
                    <img class="img-fluid" src="{{asset('assets/images/pioneer2.jpg')}}" alt="">
                </div>
                <div class="col">
                    <img class="img-fluid" src="{{asset('assets/images/visa.png')}}" alt="">
                </div>
                <div class="col">
                    <img class="img-fluid" src="{{asset('assets/images/visa.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
@include('user/footer_navigation')
@include('user/footer')