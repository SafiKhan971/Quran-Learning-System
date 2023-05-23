<!-- header -->
@include('user/header')
<style>
    .button {
        padding: 1em 2em;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        letter-spacing: 5px;
        text-transform: uppercase;
        color: #BE9552;
        transition: all 1000ms;
        font-size: 15px;
        position: relative;
        overflow: hidden;
        outline: 2px solid #BE9552;
    }

    button:hover {
        color: #ffffff;
        transform: scale(1.1);
        outline: 2px solid #ddb77a;
        box-shadow: 4px 5px 17px -4px #BE9552;
    }

    button::before {
        content: "";
        position: absolute;
        left: -50px;
        top: 0;
        width: 0;
        height: 100%;
        background-color: #BE9552;
        transform: skewX(45deg);
        z-index: -1;
        transition: width 1000ms;
    }

    button:hover::before {
        width: 250%;
    }

    .title {
        font-size: 4rem;
    }

    .textsize {
        font-size: 17px;
    }



    @media only screen and (max-width: 480px) {
        .title2 {
            font-size: 30px;
        }

        .subtitle {
            font-size: 14px;
        }

        .demoButton {
            width: 280px;
            height: 35px;
            font-size: 10px;
            padding: 5px 8px;
            margin-top: 0px;
        }

        .image2 {
            margin-left: 102px;
        }

    }
</style>
<!-- navbar -->
@include('user/navigation')
<!-- hero section -->
<section class="py-14 py-lg-21" style="background: url(assets/images/banner/hero-img.jpg)no-repeat; background-size: cover; background-position: center center; height:100vh">
    <div class="container">
        <div class="row justify-content-center">

            <!-- hero captions -->
            <div class="col-md-12 col-sm-2 text-center title">
                <img class="img-fluid" src="{{ asset('assets/images/banner/bsml-txt.png') }}" alt="" srcset="">
                <h2 class="text-light mt-3 subtitle">Transform Your Spiritual Journey with</h2>
                <h3 class="text-light title title2">Holy Quran Academy</h3>
                <button type="submit" class="button demoButton">Request Demo Class</button>
            </div>
        </div>
    </div>
</section>

<!-- Begin Learning -->

<section class="py-lg-10 py-6">
    <div class="container">
        <div class="row align-items-center mb-3">
            <div class="text-center mb-3">
                <h1 class="mb-3">Begin Learning Holy Quran Now in 3 Easy Steps</h1>
                <p class="lead subtitle">Holy Quran Academy makes it easy for you and your family to
                    learn the holy Quran online. Our registration process is simple and quick, so you
                    can start your learning journey without any hassle.
                    Just follow these steps to join our online Quran course and enjoy the benefits of
                    learning Quran from qualified and experienced teachers.
                </p>
            </div>

            <div class="offset-lg-1 col-lg-7 mb-2">
                <h2>1. Register</h2>
                <p class="lead subtitle textsize">
                    The first step is to register for our online Quran course. You can choose
                    from different levels and topics according to your needs and goals. You
                    will also get access to qualified and experienced Quran teachers who will
                    guide you through your learning journey.
                </p>

                <h2>2. Schedule Your Free Trial Now</h2>
                <p class="lead subtitle textsize">
                    The second step is to schedule your classes at your convenience. You can
                    learn Quran anytime and anywhere, as long as you have an internet connection
                    and a device. You can also adjust your pace and frequency of classes according
                    to your progress and availability.
                </p>

                <h2>3. Start Your Divine Journey with Your Initial Class</h2>
                <p class="lead subtitle textsize">
                    The third step is to enjoy learning Quran with our interactive and engaging lessons.
                    You will learn how to read, recite, memorize, and understand the Quran with clarity
                    and confidence. You will also benefit from the spiritual and practical guidance of
                    the Quran in your daily life.
                </p>

            </div>
            <div class="col-lg-3">
                <div class="mb-5">
                    <img src="{{asset('assets/images/blog/portrait.jpg')}}" alt="about" class="img-fluid rounded w-100" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Few Words -->


<section>
    <div class="container">
        <div class="row align-items-center mb-3">
            <div class="offset-lg-1 col-lg-4">
                <div class="mb-5 ml-4">
                    <img src="{{asset('assets/images/book1.jpg')}}" alt="about" class="img-fluid rounded w-100" />
                </div>
            </div>
            <div class="col-lg-6">
                <h3>Few words about</h3>
                <h1>Holy Quran Academy</h1>
                <p class="lead subtitle textsize">
                    Holy Quran Academy is an online platform that aims to help Muslims around
                    the world learn and understand the Quran. We offer a variety of courses and
                    services, such as Quran reading, recitation, memorization, translation, tafseer,
                    and more. Our teachers are qualified and experienced in teaching Quran online.
                    Our classes are flexible and affordable, and our curriculum is designed to suit
                    different levels and goals. Whether you want to learn Quran for yourself or your
                    children, Holy Quran Academy is the best choice for you. Join us today and start
                    your journey of learning Quran with ease and convenience.
                </p>

                <a href="{{url('about')}}" class="btn btn-outline-primary">Read More</a>
            </div>
        </div>

    </div>
</section>

<!-- Why choose us -->
<section>
    <div class="container">
        <div class="row align-items-center mb-lg-14 mb-10">
            <div class="offset-lg-1 col-lg-6">
                <h1>Why Choose Us</h1>
                <p class="lead subtitle textsize">
                    The holy quran academy is an online platform that offers courses and lessons
                    on Quran recitation, memorization, translation and interpretation. You can
                    learn from qualified and experienced teachers who will guide you through every
                    step of your journey. You can also benefit from the flexible and convenient
                    schedule that suits your needs and preferences. Whether you are a beginner or
                    an advanced learner, the holy quran academy will help you achieve your goals
                    and enrich your faith.
                </p>
                <ul class="row">
                    <li class="col-6"> Experience Free Trial Classes </li>
                    <li class="col-6"> Learn the Quran with Tajweed, word by word. </li>
                    <li class="col-6"> Dedicated support for slow learners. </li>
                    <li class="col-6"> Memorize the Quran online. </li>
                    <li class="col-6"> Female Quran teachers available for women and children.</li>
                    <li class="col-6"> Highly skilled Quran teachers fluent in English.</li>
                    <li class="col-6"> Monthly assessment and feedback on your progress.</li>
                    <li class="col-6"> Flexible timings to accommodate your schedule.</li>
                </ul>

            </div>
            <div class="col-lg-4">
                <div class="mb-5 ml-4">
                    <img src="{{asset('assets/images/ab1.jpg')}}" alt="about" class="img-fluid rounded w-100" />
                </div>
            </div>
        </div>

    </div>
</section>



<!-- Blogs -->
<section class="pb-lg-14 pb-8">
    <div class="container">
        <div class="text-center mb-3">
            <p>Latest Blogs</p>
            <h2> News & Updates </h2>
        </div>
        <div class="row">
            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                    <a href="">
                        <img src="assets/images/blog/wc-img-1.jpg" class="d-block w-100 rounded" alt="...">
                        </a>
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0">
                            <a href="pages/listing-single.html" class="text-inherit">Lorem ipsum dolor sit amet</a>
                        </h3>
                        <p class="mb-1">New York, US</p>
                    </div>
                </div>
            </div>

            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                        <img src="assets/images/blog/wc-img-1.jpg" class="d-block w-100 rounded" alt="...">
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0">
                            <a href="pages/listing-single.html" class="text-inherit">Lorem ipsum dolor sit amet</a>
                        </h3>
                        <p class="mb-1">New York, US</p>
                    </div>
                </div>
            </div>

            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                        <img src="assets/images/blog/wc-img-1.jpg" class="d-block w-100 rounded" alt="...">
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0">
                            <a href="pages/listing-single.html" class="text-inherit">Lorem ipsum dolor sit amet</a>
                        </h3>
                        <p class="mb-1">New York, US</p>
                    </div>
                </div>
            </div>

            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                        <img src="assets/images/blog/wc-img-1.jpg" class="d-block w-100 rounded" alt="...">
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0">
                            <a href="pages/listing-single.html" class="text-inherit">Lorem ipsum dolor sit amet</a>
                        </h3>
                        <p class="mb-1">New York, US</p>
                    </div>
                </div>
            </div>

            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                    <a href="">
                        <img src="assets/images/blog/wc-img-1.jpg" class="d-block w-100 rounded" alt="...">
                        </a>
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0">
                            <a href="pages/listing-single.html" class="text-inherit">Lorem ipsum dolor sit amet</a>
                        </h3>
                        <p class="mb-1">New York, US</p>
                    </div>
                </div>
            </div>

            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                        <img src="assets/images/blog/wc-img-1.jpg" class="d-block w-100 rounded" alt="...">
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0">
                            <a href="pages/listing-single.html" class="text-inherit">Lorem ipsum dolor sit amet</a>
                        </h3>
                        <p class="mb-1">New York, US</p>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>

<!-- footer -->

@include('user/footer_navigation')
@include('user/footer')