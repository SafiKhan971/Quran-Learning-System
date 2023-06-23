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
    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-4">
                        <h1 class="display-6 fw-semi-bold">Packages</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pageheader-->
    <!-- pricing table start -->
    <section class="py-lg-10 py-6">
        <div class="container">
            <div class="d-flex justify-content-around">
                <button id="pak" class="btn btn-primary country" data-country_name="Pakistan"> PAK </button>
                <button id="usa" class="btn btn-primary country" data-country_name="USA"> USA </button>
                <button id="uk" class="btn btn-primary country" data-country_name="UK"> UK </button>
            </div>
            <p class="text-center"> Packages for <span id="country"></span> </p>
            <div class="row">
                @foreach ($packages as $package)
                    <div class="col-md-6  col-sm-6 col-lg-3 col-xl-3">
                        <div class="card bg-primary text-center rounded border-0 bg-opacity-10 mb-3">
                            <div class="card-body py-10">
                                <h2 class="fs-3">{{ $package->name }}</h2>
                                <h4 class="fw-bold h1 mt-3 mb-5" id="price">  </h4>
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><span class="me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="var(--rw-success)"
                                                    class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg></span>30 Min / Day</li>
                                        <li class="mb-2"><span class="me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="var(--rw-success)"
                                                    class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg></span>{{ $package->total_classes }} Classes / Week</li>
                                        <li class="mb-2"><span class="me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="var(--rw-success)"
                                                    class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg></span>Quran Reading</li>
                                        <li class="mb-2"><span class="me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="var(--rw-success)"
                                                    class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg></span>Namaz / Salah</li>
                                        <li class="mb-2"><span class="me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="14" height="14" fill="var(--rw-success)"
                                                    class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg></span>Duas & Kalmas</li>
                                    </ul>
                                </div>
                                <a href="https://wa.link/w9jpe2" class="btn btn-primary mt-3">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>

            
    </section>

    <!-- pricing table close -->
    <!-- question start -->
    <section class="pt-5 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-6">
                        <h2>Some Questions Might You Have</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item mb-4">
                            <h3>What is an online Quran academy?</h3>
                            <p>An online Quran academy is a virtual platform that offers Quranic education
                                and teachings through the internet. It provides individuals with the opportunity
                                to learn the Quran, recitation (Tajweed), memorization (Hifz), and other related
                                subjects from qualified teachers using online tools such as video conferencing,
                                interactive lessons, and digital resources.</p>
                        </li>
                        <li class="list-group-item mb-4">
                            <h3>How does online Quran learning work?</h3>
                            <p>Online Quran learning typically involves signing up for a course or program offered
                                by an online Quran academy. Once enrolled, students are assigned a qualified Quran
                                teacher who conducts personalized lessons through video conferencing platforms.
                                These virtual classes allow students to interact with their teacher in real-time,
                                receive guidance, practice recitation, and engage in Quranic discussions. Additionally,
                                online resources and materials may be provided to enhance the learning experience.</p>
                        </li>
                        <li class="list-group-item mb-4">
                            <h3>Can I choose the timing and schedule for my online Quran classes?</h3>
                            <p>Yes, one of the advantages of online Quran learning is the flexibility it offers in
                                terms of scheduling. Most online Quran academies provide flexible timing options to
                                accommodate the busy schedules of students. Whether you prefer morning, evening,
                                or weekend classes, you can discuss and finalize a suitable schedule with your
                                assigned Quran teacher.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item mb-4">
                            <h3>Can I get a trial or demo class before enrolling in an online Quran academy?</h3>
                            <p>TYes, online Quran academy offer trial or demo classes to allow prospective
                                students to experience our teaching methodology and interact with our teachers.
                                These trial classes are a great way to assess the academy's teaching style, the
                                teacher's
                                expertise, and the overall learning environment before making a decision to enroll.</p>
                        </li>
                        <li class="list-group-item mb-4">
                            <h3> What are the advantages of learning the Quran online?</h3>
                            <p>Learning the Quran online provides several advantages, including flexibility in
                                scheduling,
                                personalized attention from qualified teachers, the ability to learn from the comfort of
                                your own home, access to a wide range of learning resources, and the opportunity to
                                connect
                                with fellow students from around the world. It is a convenient and effective way to
                                deepen
                                your understanding of the Quran at your own pace.</p>
                        </li>
                        <li class="list-group-item mb-4">
                            <h3>How do I enroll in an online Quran academy?</h3>
                            <p>To enroll to online quran academy, you just need to create an account, login to your
                                account, select your favourite plan, pick your free time and get started.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function () {
        $('#price').html('Rs 50');
        $('.country').click(function (e) { 
            e.preventDefault();
            name = $(this).data('country_name');
            if(name == 'Pakistan')
            {
                $('#price').html('Rs 50');
                $('#country').html('Pakistan');
            }
            else if(name == 'USA')
            {
                // alert(name);
                $('#price').html('$30');
                $('#country').html('USA');
            }
            else if(name == 'UK')
            {
                // alert(name);
                $('#price').html('€20');
                $('#country').html('UK');
            }
            // alert(name);
            // $('#price').html('Rs/. 50');
        });
    });
</script>

@include('user/footer_navigation')
@include('user/footer')
