<x-admin-layout>
    <x-slot name='title'> EQ | Add Teacher </x-slot>
    <x-slot name='page'> Add Teacher </x-slot>
    <div class="container pl-5 pr-5">
        <form action="{{ url('admin/add-teacher') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group pl-2 pr-2">
                <label> Full Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Full Name" />
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Email</label>
                <input type="text" name="email" class="form-control " placeholder="Enter Email">
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Phone" />
                <span class="text-danger">
                    @error('phone')
                        {{ $message }}
                    @enderror
                </span>
            </div>



            <div class="form-group pl-2 pr-2">
                <label>Address</label>
                <textarea type="text" name="address" class="form-control" placeholder="Enter Address"></textarea>
                <span class="text-danger">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span>
            </div>


            <div class="col-md-6 col-sm-3">
                <div class="form-group pl-3 pr-3">
                    <label>Upload File</label>
                    <input type="file" name="image" class="form-control-file" value="{{ old('image') }}" />
                    <span class="text-danger">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="d-flex justify-content-end pr-2">
                <button type="submit" class="btn btn-primary mt-3 mb-3"> Add Teacher </button>
            </div>
        </form>
    </div>
</x-admin-layout>

