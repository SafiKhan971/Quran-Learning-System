<x-admin-layout>
    <x-slot name='title'> EQ | Edit Teacher </x-slot>
    <x-slot name='page'> Edit Teacher </x-slot>
    <div class="container pl-5 pr-5">
        <form action="{{ url('admin/update-teacher') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value={{ $data['id'] }} />
            <div class="form-group pl-2 pr-2">
                <label> Full Name </label>
                <input type="text" name="name" value="{{$data['name']}}" class="form-control" placeholder="Enter Full Name" />
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Email</label>
                <input type="text" name="email" value="{{$data['email']}}" class="form-control " >
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Phone</label>
                <input type="text" name="phone" value="{{$data['phone']}}" class="form-control"  />
                <span class="text-danger">
                    @error('phone')
                        {{ $message }}
                    @enderror
                </span>
            </div>



            <div class="form-group pl-2 pr-2">
                <label>Address</label>
                <textarea type="text" name="address" class="form-control"> {{$data['address']}}</textarea>
                <span class="text-danger">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span>
            </div>


            <div class="form-group pl-2 pr-2">
                <label>Update Image</label>
                <input type="file" name="image" class="form-control-file" />
            </div>

            <div class="mt-3 pl-4">
                <img src="{{ asset('storage/' . $data['image']) }}" alt="Teacher Image" width="100px" height="100px">
            </div>

            <div class="d-flex justify-content-end pr-2">
                <button type="submit" class="btn btn-primary mt-3 mb-3"> Update Teacher </button>
            </div>
        </form>
    </div>
</x-admin-layout>

