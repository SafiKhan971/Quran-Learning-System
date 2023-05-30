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
                        <h1 class="display-6 fw-semi-bold">Blogs</h1>
                        <p class="lead subtitle">The blog section on our website is a treasure trove of valuable 
                            information, covering a wide range of topics and offering insightful articles 
                            written by industry experts.  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pageheader-->

    <section>
        <div class="container">
           
            <div class="row">
                @foreach ($blogs as $item)
                <div class="col-lg-4 col-md-6 col-12 mb-6 mb-md-0">
                    <!-- post -->
                    <div class="mb-6">
                        <!-- img -->
                        <div class="img-hover mb-4">
                            <a href="{{url('blog_single', $item->slug)}}"><img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-fluid"></a>
                        </div>
                        <!-- content -->
                        <div>
                            <a href="" class="mb-3 d-block lh-1 fw-semi-bold">{{ $item->title }}</a>
                            <div class="mb-4 mb-lg-8">
                                <h3>
                                    <a href="{{url('blog_single', $item->slug)}}" class="text-inherit">{{ $item->name }}</a>
                                </h3>
                                <div class="lead subtitle">
                                    {!! Str::limit($item->description, 50) !!} 
                                </div>
                                <!-- meta -->
                                <div class="fs-5">
                                    <span>By<a href="#" class="ms-2 text-inherit fw-semi-bold">Holy Quran Academy</a></span>
                                    <span class="ms-2">/ <span class="ms-2 text-muted"> December 5, 2023</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <!-- pagination -->
                <div>
                    <nav aria-label="">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

</main>
@include('user/footer_navigation')
@include('user/footer')