<x-admin-layout>
    <x-slot name='title'> OQA | Category List </x-slot>
    <x-slot name='page'> Category List </x-slot>
    @if (session('success'))
        <div class="col-md-11 ml-5 alert alert-default-success">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('danger'))
        <div class="col-md-11 ml-5 alert alert-default-danger">
            {{ session('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <section class="container pl-3 pr-3">
        {{-- Category List --}}
        <a href="{{url('admin/add-category')}}" class="btn btn-primary float-right"> Create </a><br>
        <div class="table-responsive mt-4">
            <table id="myTable" class="table bg-white table-hover">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Title </th>
                        <th> Slug </th>
                        <th> Delete </th>
                        <th> Edit </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $Category)
                        <tr>
                            <td> {{ $Category['id'] }} </td>
                            <td> {{ $Category['title'] }} </td>
                            <td> {{ $Category['slug'] }} </td>
                            
                            <td>
                                <a class="btn btn-danger" href={{ 'deletecategory/' . $Category['id'] }}>
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href={{ 'updatecategory/' . $Category['id'] }}>
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
