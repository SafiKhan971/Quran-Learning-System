@section('title')
    My Page
@endsection
@include('user/header')
@include('user/navigation2')
<main>
    <!-- pageheader -->
    <section class="pt-4 pb-4 pb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-4">
                        <h1 class="display-6 fw-semi-bold">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pageheader-->

    <!-- who we are -->
    <section>
        <div class="container">
            <div class="row align-items-center mb-lg-5 mb-5">
                <div class="col-lg-6">
                    <div class="mb-5">
                        <img src="{{asset('assets/images/about1.jpg')}}" alt="about" class="img-fluid rounded w-100" />
                    </div>
                </div>
                <div class="col-lg-5">
                    <h1>Who we are</h1>
                    <p class=" subtitle">
                    Holy Quran Academy is an online platform that aims to provide quality Quran education to 
                    Muslims around the world. We offer various courses and programs that cater to different 
                    levels and needs of learners, from beginners to advanced students. Our mission is to help 
                    Muslims learn and understand the Quran with proper Tajweed, recitation, memorization, and 
                    interpretation.

                    We have a team of qualified and experienced Quran teachers who are fluent in English and Arabic. 
                    They are trained and certified to teach Quran online using modern and effective methods. They are 
                    also friendly and supportive, and they will guide you every step of the way in your Quran journey.
                    </p>
                </div>
            </div>

            <div class="row align-items-center mb-lg-5 mb-5">
                
                <div class="col-lg-5">
                    
                    <p class=" subtitle">
                    We believe that learning Quran should be accessible, convenient, and affordable for everyone. That’s
                    why we offer free trial classes, flexible timings, and reasonable fees. You can choose the course 
                    that suits you best, and learn Quran from the comfort of your home. You can also benefit from our 
                    monthly progress assessment and feedback system, which will help you track your improvement and 
                    achieve your goals.

                    Join us today and discover the beauty and wisdom of the Quran with Holy Quran Academy. We look 
                    forward to welcoming you to our online community of Quran learners and teachers. May Allah bless 
                    you and reward you for your efforts. Ameen.
                    </p>
                </div>

                <div class=" col-lg-6">
                    <div class="mb-5">
                        <img src="{{asset('assets/images/about2.jpg')}}" alt="about" class="img-fluid rounded w-100" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3 mb-lg-0">
                        <div class="card-body p-lg-8">
                            <div class="text-center">
                                <div class="icon-shape icon-xxl bg-primary-100 rounded-circle mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-rocket-takeoff-fill text-primary" viewBox="0 0 16 16">
                                        <path d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.578 3.578 0 0 0-.108-.563 2.22 2.22 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2.35 2.35 0 0 0-.16-.045 3.797 3.797 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.552 2.552 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526l.24-2.408Zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361.599.599.437 1.732-.36 2.531Z" />
                                        <path d="M5.205 10.787a7.632 7.632 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925Z" />
                                    </svg>
                                </div>
                                <h3>Our Mission</h3>
                                <p class="mb-0">
                                Our mission is to spread the light of the Quran to all human being across the globe. 
                                We want to help you learn and understand the Quran with ease and excellence. 
                                We want to inspire you to love and live by the Quran, and to share its message 
                                with others.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 mb-lg-0">
                        <div class="card-body p-lg-8">
                            <div class="text-center">
                                <div class="icon-shape icon-xxl bg-primary-100 rounded-circle mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye-fill text-primary" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </div>
                                <h3>Our Vision</h3>
                                <p class="mb-0">
                                Our vision is to be a ing online Quran academy that provides high-quality Quran 
                                education to Muslims of all ages and backgrounds. We aspire to be a platform that 
                                connects Quran learners and teachers from different parts of the world. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 mb-lg-0">
                        <div class="card-body p-lg-8">
                            <div class="text-center">
                                <div class="icon-shape icon-xxl bg-primary-100 rounded-circle mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-award text-primary" viewBox="0 0 16 16">
                                        <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                    </svg>
                                </div>
                                <h3>Our Achievement</h3>
                                <p class="mb-0">
                                Our achievement is measured by the success and satisfaction of our students. 
                                We are proud to have helped thousands of Muslims learn and memorize the Quran 
                                online since our inception.We are grateful to Allah for His blessings and guidance,
                                and we seek His acceptance and forgiveness for our deeds.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- who we are -->
    <!-- vendor employee -->
    <section class="py-lg-10 py-6 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="text-center mb-8 mb-md-0">
                        <h2 class="text-white display-6 fw-bold">50,000</h2>
                        <h3 class="text-white mb-0">Students</h3>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="text-center mb-8 mb-md-0">
                        <h2 class="text-white display-6 fw-bold">150</h2>
                        <h3 class="text-white mb-0">Teachers</h3>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="text-center">
                        <h2 class="text-white display-6 fw-bold">5000</h2>
                        <h3 class="text-white mb-0">Reviews</h3>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="text-center">
                        <h2 class="text-white display-6 fw-bold">9</h2>
                        <h3 class="text-white mb-0">Counteries</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- vendor employee -->
    <!-- customer feedback -->
    <section class="py-lg-10 py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="text-center mb-3">
                        <h2 class="mb-1">Customer Feedback</h2>
                        <p class="mb-0">
                        Customers praise the online Quran classes for their high-quality teaching, 
                        their flexible timings, and their supportive staff.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-lg-6">
                            <div class="text-center">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="var(--rw-primary)" class="bi bi-quote" viewBox="0 0 16 16">
                                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                    </svg>
                                </div>
                                <h3 class="mb-2">Ahmed, USA</h3>
                                <p class="mb-0">
                                    “ I have been learning Quran with Holy Quran Academy for over a year now, 
                                    and I am very happy with my progress. I have improved my Tajweed 
                                    and recitation skills, and I have also memorized some Surahs. I highly recommend 
                                    Holy Quran Academy to anyone who wants to learn Quran online. ”
                                </p>
                                <div class="mt-5">
                                    <img src="{{asset('assets/images/ahmad.jpg')}}" alt="testimonial-1" class="rounded-circle mb-3" />
                                </div>
                                <div>
                                    <h4 class="mb-0">Ahmed</h4>
                                    <p class="mb-0 small">New York</p>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-lg-6">
                            <div class="text-center">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="var(--rw-primary)" class="bi bi-quote" viewBox="0 0 16 16">
                                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                    </svg>
                                </div>
                                <h3 class="mb-2">Fatima, UK</h3>
                                <p class="mb-0">
                                    “Holy Quran Academy is the best online Quran academy I have ever tried. 
                                    Their courses are well-designed and suitable for different levels and goals. 
                                    Their teachers are very professional and friendly, and they make the classes 
                                    fun and interactive.”
                                </p>
                                <div class="mt-5">
                                    <img src="{{asset('assets/images/fatima.jpg')}}" alt="testimonial-1" class="rounded-circle mb-3" />
                                </div>
                                <div>
                                    <h4 class="mb-0">Fatima Batool</h4>
                                    <p class="mb-0 small">United Kingdom</p>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xl-4 d-md-none d-block d-lg-block">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-lg-6">
                            <div class="text-center">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="var(--rw-primary)" class="bi bi-quote text-primary" viewBox="0 0 16 16">
                                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                    </svg>
                                </div>
                                <h3>Muhammad, Canada</h3>
                                <p>
                                    “I enrolled my two children in Holy Quran Academy, and I am very impressed by
                                     their service and quality. My children enjoy their classes and look forward 
                                     to them every week. They have developed a love for the Quran and its recitation. 
                                     I thank Holy Quran Academy for their excellent work.”
                                </p>
                                <div class="mt-5">
                                    <img src="{{asset('assets/images/muh.jpg')}}" alt="testimonial-1" class="rounded-circle mb-3" />
                                </div>
                                <div>
                                    <h4 class="mb-0">Muhammad</h4>
                                    <p class="mb-0 small">Torronto</p>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--rw-warning)" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- customer feedback -->
</main>
@include('user/footer_navigation')
@include('user/footer')