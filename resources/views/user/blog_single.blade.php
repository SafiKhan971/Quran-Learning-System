@include('user/header')
@include('user/navigation2')

<main>
    <section class="pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-8">
                        <div class="mb-4">
                            <h1>{{$blog->name}}</h1>
                            <div class="fs-5">
                                <span>By<a href="{{url('/')}}" class="ms-2 text-inherit fw-semi-bold">Holy Quran Academy</a></span>
                                <span class="ms-2">/<span class="ms-2 text-muted">{{ $blog->created_at_date }}</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12">
                    <!-- post -->
                    <div class="col-md-12 col-12">
                        <!-- img -->
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid rounded-2 mb-6" />
                        <!-- post single -->
                        <div class="mb-8">
                            {!! $blog->description !!} 
                        </div>
                    </div>
                    
                    <!-- related-post-block -->
                    <div class="col-md-12 col-12 text-center">
                        <div class="border-bottom">
                            <a href="{{url('blogs')}}" class="btn btn-primary">View All Blog Posts</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-12">
                            <!-- search -->
                            <div class="search mb-4">
                                <form action="{{url('search-blog')}}" method="POST">
                                    @csrf
                                <div class="d-flex mb-3 position-relative">
                                    <input type="text" name="search" class="form-control" placeholder="Search..." />
                                    <button type="submit" class="btn btn-primary"> <i class="bi bi-search"></i> </button>
                                </div>
                            </form>
                            </div>
                            <!-- card -->
                            <div class="card mb-4">
                                <!-- card body -->
                                <div class="card-body p-4">
                                    <h3>Recent Posts</h3>
                                    <div class="mt-3">
                                        <!-- list -->
                                        <ul class="list-unstyled mb-0">
                                            @foreach($blogtitles as $item)
                                            <li class="mb-3">
                                                <h4
                                                    class="d-flex align-items-center"
                                                >
                                                    <a
                                                        href="{{url('blog_single', $item->slug)}}"
                                                        class="text-inherit"
                                                    >
                                                       {{  $item->name }} </a
                                                    >
                                                </h4>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card mb-4">
                                <!-- card body -->
                                <div class="card-body p-4">
                                    <h3>Categories</h3>
                                    <div class="mt-3">
                                        <!-- list -->
                                        <ul class="list-unstyled mb-0">
                                            @foreach($categories as $category)
                                            <li class="d-flex align-items-center">
                                                <span>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="15"
                                                        height="15"
                                                        fill="currentColor"
                                                        class="bi bi-arrow-right"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                                                        />
                                                    </svg>
                                                </span>
                                                <a href="{{url('blogs',$category->slug)}}" class="text-inherit ms-2">{{ $category->title }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- card -->
                            <div class="card mb-4">
                                <!-- card body -->
                                <div class="card-body p-4">
                                    <h3>Tags</h3>
                                    <div class="mt-3">
                                        <a
                                            href="#"
                                            class="btn btn-light btn-sm mb-2"
                                            >wedding</a
                                        >
                                        <a
                                            href="#"
                                            class="btn btn-light btn-sm mb-2"
                                            >decoration</a
                                        >
                                        <a
                                            href="#"
                                            class="btn btn-light btn-sm mb-2"
                                            >couple</a
                                        >
                                        <a
                                            href="#"
                                            class="btn btn-light btn-sm mb-2"
                                            >bride</a
                                        >
                                        <a
                                            href="#"
                                            class="btn btn-light btn-sm mb-2"
                                            >groom</a
                                        >
                                        <a
                                            href="#"
                                            class="btn btn-light btn-sm mb-2"
                                            >weddingideas</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>
</main>
@include('user/footer_navigation')
@include('user/footer')