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

            <div class="offset-lg-1 col-lg-7 mb-5">
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
        <div class="row align-items-center mb-lg-14 mb-10">
            <div class="offset-lg-1 col-lg-4">
                <div class="mb-5 ml-4">
                    <img src="../assets/images/post/about-img-4.jpg" alt="about" class="img-fluid rounded w-100" />
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
                
                <a href="#" class="btn btn-outline-primary">Read More</a>
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
        
                </p>
                <ul>
                    <li> Experience Free Trial Classes </li>
                    <li> Learn the Quran with Tajweed, word by word. </li>
                    <li> Dedicated support for slow learners. </li>
                    <li> Memorize the Quran online. </li>
                    <li> Female Quran teachers available for women and children.</li>
                    <li> Highly skilled Quran teachers fluent in English.</li>
                    <li> Monthly assessment and feedback on your progress.</li>
                    <li> Flexible timings to accommodate your schedule.</li>
                </ul>
                
            </div>
            <div class="col-lg-4">
                <div class="mb-5 ml-4">
                    <img src="../assets/images/post/about-img-4.jpg" alt="about" class="img-fluid rounded w-100" />
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
                    <!-- img -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/blog/wc-img-1.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/blog/wc-img-2.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/blog/wc-img-3.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0"><a href="pages/listing-single.html" class="text-inherit">Lorem ipsum dolor
                                sit amet</a>
                        </h3>
                        <p class="mb-1">New York, US</p>
                        <div>
                            <!-- rating -->
                            <span class="fs-5 lh-1 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-gray-400)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                            <span class="fs-5 ms-1 lh-1 align-middle"><span class="text-dark fw-semi-bold">4.7</span>
                                (17)</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                    <!-- img -->
                    <div class="position-relative">
                        <a href="pages/listing-single.html"><img src="assets/images/blog/wc-img-2.jpg" alt="" class="img-fluid rounded"></a>

                        <!-- like -->
                        <div class="position-absolute top-0 pe-2 pt-2 end-0">
                            <a href="#" class="text-white text-hover-primary" data-bs-toggle="modal" data-bs-target="#favouriteIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0"><a href="pages/listing-single.html" class="text-inherit">Nullam Amet Nibh
                                Ultrices</a>
                        </h3>
                        <p class="mb-1">Barcelona, ES</p>
                        <div>
                            <!-- rating -->
                            <span class="fs-5 lh-1 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-gray-400)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                            <span class="fs-5 ms-1 lh-1 align-middle"><span class="text-dark fw-semi-bold">3.9</span>
                                (15)</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                    <!-- img -->
                    <div id="carouselExampleSecond" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleSecond" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleSecond" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleSecond" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/blog/wc-img-2.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/blog/wc-img-3.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/blog/wc-img-4.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSecond" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSecond" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0"><a href="pages/listing-single.html" class="text-inherit">Praesent Deros
                                Vitaex
                                Egestas</a></h3>
                        <p class="mb-1">Paris, France </p>
                        <div>
                            <!-- rating -->
                            <span class="fs-5 lh-1 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-gray-400)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                            <span class="fs-5 ms-1 lh-1 align-middle"><span class="text-dark fw-semi-bold">4.5</span>
                                (18)</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                    <!-- img -->
                    <div class="position-relative">
                        <a href="pages/listing-single.html"><img src="assets/images/blog/wc-img-4.jpg" alt="" class="img-fluid rounded"></a>

                        <!-- like -->
                        <div class="position-absolute top-0 pe-2 pt-2 end-0">
                            <a href="#" class="text-white text-hover-primary" data-bs-toggle="modal" data-bs-target="#favouriteIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0"><a href="pages/listing-single.html" class="text-inherit">Nullam Amet Nibh
                                Ultrices</a>
                        </h3>
                        <p class="mb-1">London, UK</p>
                        <div>
                            <!-- rating -->
                            <span class="fs-5 lh-1 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-gray-400)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                            <span class="fs-5 ms-1 lh-1 align-middle"><span class="text-dark fw-semi-bold">3.1</span>
                                (11)</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                    <!-- img -->
                    <div id="carouselExampleThird" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleThird" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleThird" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleThird" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/blog/wc-img-4.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/blog/wc-img-5.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/blog/wc-img-6.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleThird" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleThird" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0"><a href="pages/listing-single.html" class="text-inherit">Vivamus Faucibus
                                Quamel</a></h3>
                        <p class="mb-1">Barcelona, ES</p>
                        <div>
                            <!-- rating -->
                            <span class="fs-5 lh-1 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-gray-400)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                            <span class="fs-5 ms-1 lh-1 align-middle"><span class="text-dark fw-semi-bold">2.1</span>
                                (14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-6">
                    <!-- img -->
                    <div class="position-relative">
                        <a href="pages/listing-single.html"><img src="assets/images/blog/wc-img-8.jpg" alt="" class="img-fluid rounded"></a>

                        <!-- like -->
                        <div class="position-absolute top-0 pe-2 pt-2 end-0">
                            <a href="#" class="text-white text-hover-primary" data-bs-toggle="modal" data-bs-target="#favouriteIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- content -->
                    <div class="mt-3">
                        <h3 class="mb-0"><a href="pages/listing-single.html" class="text-inherit">Vestibulum
                                Necligula Eget
                                Dolor</a></h3>
                        <p class="mb-1">London, UK</p>
                        <div>
                            <!-- rating -->
                            <span class="fs-5 lh-1 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--rw-gray-400)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </span>
                            <span class="fs-5 ms-1 lh-1 align-middle"><span class="text-dark fw-semi-bold">4.1</span>
                                (16)</span>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>

<!-- footer -->

@include('user/footer_navigation')
@include('user/footer')