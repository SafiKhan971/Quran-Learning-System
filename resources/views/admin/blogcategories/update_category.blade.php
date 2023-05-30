<x-admin-layout>
    <x-slot name='title'> MDMS | Update Category </x-slot>
    <x-slot name='page'> Update Category </x-slot>
    <div class="container pl-5 pr-5">
        <form action="updatecategory" method="POST">
            @csrf

            <div class="form-group pl-2 pr-2">
                <label>Title</label>
                <input type="hidden" name="id" value={{ $data['id'] }} />
                <input type="text" name="title" value="{{ $data['title'] }}" class="form-control" />
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Slug</label>
                <input type="text" name="slug" value="{{ $data['slug'] }}" class="form-control" />
            </div>

            <div class="col-md-12 d-flex justify-content-end pr-4">
                <button type="submit" class="btn btn-primary ml-3 mb-3"> Update </button>
            </div>

        </form>
    </div>
</x-admin-layout>
