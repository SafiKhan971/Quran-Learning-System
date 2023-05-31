@include('user/header')
@include('user/navigation2')

<style>
    .card {
        background-color: #BE9552;
        padding: 3rem;
        color: white;
    }

    .card span {
        font-size: 30px;
    }

    .profile-photo{
        border-radius: 50%;
        height: 100px;
        width: 100px;
        
    }

    .rowstyle{
        margin-bottom: 5rem;
    }

    .rowstyle label{
        font-weight: bold;
    }




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
                        <h1 class="display-6 fw-semi-bold">Dashboard</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard-->

    <section class="pt-4 pb-4 pb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center mt-4">
                        <p> Total Classes </p>
                        <span> Classes </span>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-center mt-4">
                        <p> Attended Classes </p>
                        <span> Classes </span>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-center mt-4">
                        <p> Remaining Classes </p>
                        <span> Classes </span>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-center mt-4">
                        <p> Package Expiry Date </p>
                        <span> Classes </span>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Personal Detail-->
    <section class="pt-4 pb-4 pb-lg-8">
        <div class="container text-center w-75">
            <h1> Account Information </h1><br>
            <div class="row">
                <div class="col-md-12>
                    <span class="profile-photo">
                        @if($data->image == null)
                            <img class="profile-photo" src="{{asset('assets/images/avatar/avatar-1.jpg')}}" alt="">
                        @else
                            <img class="profile-photo" src="{{ asset('storage/' . $data->image) }}" alt="Profile Photo">
                        @endif
                    </span>
                </div>
            </div>

            <form action="update-account" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row rowstyle">
                <div class="col-md-6">
                    <label for="name"> Full Name </label>
                    <input type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Enter Name">
                </div>

                <div class="col-md-6">
                    <label for=""> Email </label>
                    <input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Enter Email">
                </div>
            </div>

            <div class="row rowstyle">
                <div class="col-md-6">
                    <label for="name"> Phone </label>
                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control" placeholder="Enter Phone" >
                </div>

                <div class="col-md-6">
                    <label for="name"> Address </label>
                    <input type="text" name="address" value="{{$data->address}}" class="form-control" placeholder="Enter Address">
                </div>
            </div>

            <div class="row rowstyle">
                <div class="col-md-12">
                    <label for="name"> Profile Picture </label>
                    <input type="file" name="image"  value="{{ old('image') }}" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-25"> Update </button>
        </form>
        </div>
    </section>



</main>
@include('user/footer_navigation')
@include('user/footer')
