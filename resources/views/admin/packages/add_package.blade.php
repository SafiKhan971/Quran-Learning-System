<x-admin-layout>
    <x-slot name='title'> EQA | Add Package </x-slot>
    <x-slot name='page'> Add Package </x-slot>
    <div class="container pl-5 pr-5">
        <form action="{{url('admin/add-package')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group pl-2 pr-2">
                <label> Package Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Package Name" />
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label> Total Classes </label>
                <input type="text" name="total_classes" class="form-control" placeholder="Enter Total Classes" />
                <span class="text-danger">
                    @error('total_classes')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label> Price </label>
                <input type="text" name="price" class="form-control" placeholder="Enter Package Price" />
                <span class="text-danger">
                    @error('price')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="d-flex justify-content-end pr-2">
                <button type="submit" class="btn btn-primary mt-3 mb-3"> Add Package </button>
            </div>

        </form>
    </div>
</x-admin-layout>
