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
                        <h1 class="display-6 fw-semi-bold">Careers</h1>
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
                        <h2 class="mb-0">Apply For A Job</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <form action="https://formspree.io/f/mnqyydjg" method="POST">
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

                                <textarea class="form-control" name="Message" id="exampleFormControlTextarea1" rows="3" placeholder="Message" required></textarea>
                                <div class="invalid-feedback">
                                    Please write message.
                                </div>
                            </div>

                            <!-- <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="resume">Upload Resume</label>
                                    <input type="file" name="attachment" accept="image/png, image/jpeg" class="form-control" required>
                                </div>
                            </div> -->

                            <div class="col-md-12">
                                <button class="btn btn-primary btn-lg" type="submit"> Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</main>
@include('user/footer_navigation')
@include('user/footer')