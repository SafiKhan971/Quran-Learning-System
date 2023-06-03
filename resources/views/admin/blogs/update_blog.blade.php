<x-admin-layout>
    <x-slot name='title'> MDMS | Update Blog </x-slot>
    <x-slot name='page'> Update Blog </x-slot>
    <div class="container pl-5 pr-5">
        <form action="{{url('admin/update-blog')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value={{ $data['id'] }} />

            <div class="form-group pt-2 pl-2 pr-2">
                <label>Title</label>
                <input type="text" name="title" value="{{ $data['name'] }}" class="form-control" />
            </div>



            <div class="form-group pt-2 pl-2 pr-2">
                <label>Description</label>
                <textarea id="editor_textarea"  name="description" class="form-control"> {{ $data['description'] }} </textarea>
            </div>



            <div class="form-group pt-2 pl-2 pr-2">
                <label>Slug</label>
                <input type="text" name="slug" value="{{ $data['slug'] }}" class="form-control" />
            </div>



            <div class="form-group pt-2 pl-2 pr-2">
                <label>Meta Title</label>
                <input type="text" name="meta_title" value="{{ $data['meta_title'] }}" class="form-control" />
            </div>



            <div class="form-group pt-2 pl-2 pr-2">
                <label>Meta Description</label>
                <input type="text" name="meta_description" value="{{ $data['meta_description'] }}"
                    class="form-control" />
            </div>



            <div class="form-group pt-2 pl-2 pr-2">
                <label>Meta Keywords</label>
                <input type="text" name="meta_keywords" value="{{ $data['meta_keyword'] }}" class="form-control" />
            </div>


            <div class="form-group pl-2 pr-2">
                <label for="status">Status</label>
                <select name="status" class="custom-select">
                    <option value="0" {{ $data['status'] == 0 ? 'selected' : '' }}>Hidden</option>
                    <option value="1" {{ $data['status'] == 1 ? 'selected' : '' }}>Visible</option>
                </select>
            </div>


            <div class="form-group pl-2 pr-2">
                <label>Update Image</label>
                <input type="file" name="image" class="form-control-file" />
            </div>

            <div class="mt-3 pl-4">
                <img src="{{ asset('storage/' . $data['image']) }}" alt="Blog Image" width="200px" height="100px">
            </div>

            <div class="d-flex justify-content-end pr-4">
                <button type="submit" class="btn btn-primary ml-3 mb-3"> Update </button>
            </div>


        </form>
    </div>
</x-admin-layout>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor_textarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

