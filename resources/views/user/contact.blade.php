@include('user/header')
@include('user/navigation')

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
                        <h1 class="display-6 fw-semi-bold">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pageheader-->

    <section class="pt-5 pb-14">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center mb-6">
                        <h2 class="mb-0">We would like to talk with you, Talk to us and we'll show you what we’ve
                            done, and what
                            we can do for you.</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <form action="https://formspree.io/f/mgebbkov" method="POST" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" name="FirstName" class="form-control" placeholder="First name" aria-label="First name" required>
                                    <div class="invalid-feedback">
                                        Please enter first name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" name="LastName" class="form-control" placeholder="Last name" aria-label="Last name" required>
                                    <div class="invalid-feedback">
                                        Please enter last name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="email" name="Email" class="form-control" placeholder="Email" aria-label="email" required>
                                    <div class="invalid-feedback">
                                        Please enter email.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="number" name="Phone" class="form-control" placeholder="Phone" aria-label="Phone" required>
                                    <div class="invalid-feedback">
                                        Please enter phone.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">

                                <textarea name="Message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message" required></textarea>
                                <div class="invalid-feedback">
                                    Please write message.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-lg" type="submit"> Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- form close -->
    <!-- customer start -->
    <!-- section4 start-->
    <section class="pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <div class="d-lg-flex mb-6">

                        <div class="icon-shape icon-xl border border-primary rounded-circle border-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-headset text-primary" viewBox="0 0 16 16">
                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                            </svg>
                        </div>


                        <div class="ms-lg-4 mt-4 mt-lg-0">
                            <h3>Customer Support</h3>
                            <p>Call our 24-hour helpline.</p>
                            <p class="mb-1">Phone number: +800-123-4567</p>
                            <p class="mb-0">Email Us: info@realwed.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">

                    <div class="d-lg-flex mb-6">


                        <div class="icon-shape icon-xl border border-primary rounded-circle border-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="var(--rw-primary)" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.284 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.285 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </div>

                        <div class="ms-lg-4 mt-4 mt-lg-0">
                            <h3>Our Address</h3>
                            <p>Our offices are located in the Georgia.</p>
                            <p class="mb-0">Address: 4998 Elk Creek Road
                                Canton, GA 28114</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">

                    <div class="d-lg-flex mb-6">


                        <div class="icon-shape icon-xl border border-primary rounded-circle border-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-envelope text-primary" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                        </div>

                        <div class="ms-lg-4 mt-4 mt-lg-0">
                            <h3>Other Enquiries</h3>
                            <p>Please contact us at the email below for all other inquiries.</p>
                            <p class="mb-0">Email Us: info@realwed.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


</main>
@include('user/footer_navigation')
@include('user/footer')