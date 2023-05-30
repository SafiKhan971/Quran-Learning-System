<x-admin-layout>
    <x-slot name='title'> MDMS | Add Category </x-slot>
    <x-slot name='page'> Add Category </x-slot>
    <div class="container pl-5 pr-5">
        <form action="add-category" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group pl-2 pr-2">
                <label> Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title" />
                <span class="text-danger">
                    @error('title')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label> Slug </label>
                <input type="text" name="slug" class="form-control" placeholder="Enter Slug" />
                <span class="text-danger">
                    @error('slug')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="d-flex justify-content-end pr-2">
                <button type="submit" class="btn btn-primary mt-3 mb-3"> Add Category </button>
            </div>

        </form>
    </div>
</x-admin-layout>
