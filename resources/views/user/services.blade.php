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
    <section class="pt-4 pb-2 pb-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-4">
                        <h1 class="display-6 fw-semi-bold">Our Services</h1>
                        <p class="lead subtitle"> At holy quran academy, we offer a range of online courses and lessons to 
                            help you learn and understand the Quran, the holy book of Islam. Whether 
                            you want to recite, memorize, translate or interpret the Quran, we have 
                            qualified and experienced teachers who will guide you through every step of 
                            your learning journey. You can choose from different levels, languages and 
                            schedules to suit your needs and preferences. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pageheader-->


 
    <!-- Services -->
    <section>
        <div class="container">
        <div class="row align-items-center mb-lg-5 mb-5">
                
                <div class="col-lg-5">
                    
                    <p class="lead subtitle">
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

                <div class="offset-lg-1 col-lg-6">
                    <div class="mb-5">
                        <img src="{{asset('assets/images/about2.jpg')}}" alt="about" class="img-fluid rounded w-100" />
                    </div>
                </div>
            </div>
        


            <div class="row">
                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-lg-6">
                            <div class="text-center">
                            <div class="mt-5">
                                    <img src="{{asset('assets/images/s1.jpg')}}" alt="testimonial-1" class="rounded-circle mb-3" />
                                </div>
                                <h3 class="mb-2">Elementary Quran Reading Course</h3>
                                <p class="mb-0">
                                Elementary Quran Reading Course course is designed for beginners who have little or no knowledge of 
                                 Arabic. You will learn the Arabic alphabet, vowels, and basic words and 
                                 sentences. You will also learn the rules of tajweed, which are the correct 
                                 way of reciting the Quran. By the end of this course, you will be able to 
                                 read the Quran with confidence and accuracy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-lg-6">
                            <div class="text-center">
                            <div class="mt-5">
                                    <img src="{{asset('assets/images/boy.jpg')}}" alt="testimonial-1" class="rounded-circle mb-3" />
                                </div>
                                <h3 class="mb-2">Memorizing Quran Course</h3>
                                <p class="mb-0">
                                Memorizing Quran Course, a comprehensive and effective course that will help
                                 you memorize the Quran with ease and accuracy. The Memorizing Quran Course is
                                  suitable for anyone who wants to memorize the Quran, whether they are beginners
                                or advanced learners. You will learn the best techniques and methods of memorization,
                                such as repetition, revision, and recitation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-lg-6">
                            <div class="text-center">
                            <div class="mt-5">
                                    <img src="{{asset('assets/images/taf.jpg')}}" alt="testimonial-1" class="rounded-circle mb-3" />
                                </div>
                                <h3 class="mb-2">Quran with Tafseer Course</h3>
                                <p class="mb-0">
                                The Quran with Tafseer Course is suitable for anyone who wants to learn the tafseer
                                 of the Quran, whether they are beginners or advanced learners. You will learn the 
                                 background and context of the verses, the linguistic and grammatical analysis, the 
                                 explanation of the themes and messages, and the practical applications and lessons.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-lg-6">
                            <div class="text-center">
                            <div class="mt-5">
                                    <img src="{{asset('assets/images/grammer.jpg')}}" alt="testimonial-1" class="rounded-circle mb-3" />
                                </div>
                                <h3 class="mb-2">Arabic Grammar Course</h3>
                                <p class="mb-0">
                                Looking to master Arabic grammar? Our comprehensive Arabic Grammar Course is designed 
                                to provide you with a solid foundation in understanding and applying the rules and 
                                structures of the Arabic language. Whether you're a beginner or an advanced learner, 
                                this course caters to individuals of all levels.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-lg-6">
                            <div class="text-center">
                            <div class="mt-5">
                                    <img src="{{asset('assets/images/women.jpg')}}" alt="testimonial-1" class="rounded-circle mb-3" />
                                </div>
                                <h3 class="mb-2">Quranic Courses for Women</h3>
                                <p class="mb-0">
                                Looking for Quranic courses tailored specifically for women? Look no further! Our Quranic
                                 Courses for Women are designed to provide a nurturing and supportive environment where 
                                 women can deepen their understanding of the Quran and strengthen their connection with 
                                 Allah. Our experienced female instructors offer comprehensive lessons on Tajweed
                                  (Quranic recitation), Tafsir (Quranic interpretation), and memorization techniques.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xl-4">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-lg-6">
                            <div class="text-center">
                            <div class="mt-5">
                                    <img src="{{asset('assets/images/female.jpg')}}" alt="testimonial-1" class="rounded-circle mb-3" />
                                </div>
                                <h3 class="mb-2">Female Quran teacher</h3>
                                <p class="mb-0">
                                Our highly qualified female instructors are proficient in Tajweed (Quranic recitation) 
                                and have extensive knowledge of the Quran and its teachings. Whether you're a beginner
                                 or an advanced learner, our compassionate teachers provide a nurturing environment 
                                 where you can learn at your own pace.
                                </p>
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