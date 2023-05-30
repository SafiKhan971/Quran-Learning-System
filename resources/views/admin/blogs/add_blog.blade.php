<x-admin-layout>
    <x-slot name='title'> MDMS | Add Blog </x-slot>
    <x-slot name='page'> Add Blog </x-slot>
    <div class="container pl-5 pr-5">
        <form action="{{ url('admin/add-blog') }}" method="POST" enctype="multipart/form-data">
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
                <label>Description</label>
                <textarea type="text" id="editor_textarea" name="description" class="form-control " placeholder="Enter Description"></textarea>
                <span class="text-danger">
                    @error('description')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="Enter Slug" />
                <span class="text-danger">
                    @error('slug')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Meta Title</label>
                <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title" />
                <span class="text-danger">
                    @error('meta_title')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Meta Description</label>
                <input type="text" name="meta_description" class="form-control "
                    placeholder="Enter Meta Description" />
                <span class="text-danger">
                    @error('meta_description')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Meta Keywords</label>
                <input type="text" name="meta_keywords" class="form-control" placeholder="Enter Meta Keywords" />
                <span class="text-danger">
                    @error('meta_keywords')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label for="category">Category</label>
                <select name="category" class="custom-select" id="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->title }} </option>
                    @endforeach
                </select>
                <span class="text-danger">
                    @error('category')
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

            <div class="form-group pl-2 pr-2">
                <label for="status">Status</label>
                <select name="status" class="custom-select" id="status">
                    <option value="1">Visible</option>
                    <option value="0">Hidden</option>
                </select>
                <span class="text-danger">
                    @error('status')
                        {{ $message }}
                    @enderror
                </span>
            </div>



            <div class="d-flex justify-content-end pr-2">
                <button type="submit" class="btn btn-primary mt-3 mb-3"> Add Blog </button>
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
