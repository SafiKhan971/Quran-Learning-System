<div class="navbar-transparent navbar-white navbar-position">
    <div class="container">
        <div class="d-flex justify-content-center topbar">
            <a href="https://wa.link/w9jpe2">
                <p class="phone"><i class="bi bi-whatsapp"></i> +92 3417465608 </p>
            </a>
            <a href="https://wa.link/w9jpe2">
                <p style="margin-left:20px;"><i class="bi bi-whatsapp"></i> +92 3417465608 </p>
            </a>
            <p style="margin-left:20px;"><i class="bi bi-envelope"></i> khansafi470@gmail.com </p>
        </div>

        {{-- <div class="d-flex">
            <a class="" href="index.html">

                <img src="{{ asset('assets/images/logo/logo3.png')}}" 
                    style="height: 131px;
                    width: 145px;"
                    alt="">
            </a>
        </div> --}}
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="" href="index.html" style="margin-right:5rem;">
                        <img src="{{ asset('assets/images/logo/logo-2.png')}}" 
                        class="logo"
                            alt="logo">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto ms-lg-2">

                            <li class="nav-item ">
                                <a class="nav-link " href="{{ url('/') }}">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="{{ url('about') }}">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Our Courses
                                    <i class="bi bi-caret-down-fill"></i>
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="navbarListing">
                                        <li><a class="dropdown-item" href="{{ url('courses') }}"> View All Courses</a></li>
                                        @foreach ($courses as $item)
                                        <li><a class="dropdown-item" href=""> {{$item->name}} </a></li>
                                        @endforeach
                                </ul>
                            </li>



                            <li class="nav-item ">
                                <a class="nav-link " href="{{ url('packages') }}">
                                    Packages
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="{{ url('payments') }}">
                                    Payments
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="{{ url('careers') }}">
                                    Careers
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="{{ url('downloads') }}">
                                    Downloads
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="{{ url('blogs') }}">
                                    Blog
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="{{ url('contact') }}">
                                    Contact
                                </a>
                            </li>

                        </ul>
                        @if (session()->has('user_id'))
                            <div class="d-flex justify-content-between p-3 p-lg-0">
                                <a href="{{ url('profile') }}" class="btn btn-secondary shadow-sm"
                                    style="margin-right: 5px;">My Profile</a>
                                <form action="logout" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary shadow-sm">Log Out</button>
                                </form>
                            </div>
                        @else
                            <div class="p-3 p-lg-0">
                                <a href="{{ url('login') }}" class="btn btn-primary shadow-sm">Sign in</a>
                            </div>
                        @endif
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
