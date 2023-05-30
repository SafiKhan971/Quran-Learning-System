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
                        <h1 class="display-6 fw-semi-bold">Downloads</h1>
                        <h2> Download Holy Quran and other Islamic Books</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pageheader-->

    <section class="pt-4 pb-4 pb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">File Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Complete Holy Quran</td>
                                    <td> <a href="{{asset('assets/docs/holyquran.pdf')}}" download>Download</a> </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Holy Quran with English Translation</td>
                                    <td> <a href="{{asset('assets/docs/quran_english.pdf')}}" download>Download</a> </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Islamic Duas/Kalmas</td>
                                    <td> <a href="{{asset('assets/docs/kalmas.pdf')}}" download>Download</a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('user/footer_navigation')
@include('user/footer')