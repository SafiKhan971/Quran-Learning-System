<x-admin-layout>
<x-slot name='title'> OQA | Blog List </x-slot>
<x-slot name='page'> Blog List </x-slot>
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
        {{-- Blog List --}}
        <a href="{{url('admin/add-blog')}}" class="btn btn-primary float-right"> Create </a><br>
        <div class="table-responsive mt-4">
            <table id="myTable" class="table bg-white table-hover">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Title </th>
                        <th> Category </th>
                        <th> Status </th>
                        <th> Image </th>
                        <th> Delete </th>
                        <th> Edit </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $Blog)
                        <tr>
                            <td> {{ $Blog->id }} </td>
                            <td> {{ $Blog->name }} </td>
                            <td> {{ $Blog->title }} </td>
                            <td> {{ ($Blog->status == 0)? 'Hidden': 'Visible'}} </td>
                            <td>
                                <img src="{{ asset('storage/' . $Blog->image) }}" width="30px" height="50px">
                            </td>
                            <td>
                                <a class="btn btn-danger" href={{ 'deleteblog/' . $Blog->id }}>
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href={{ 'updateblog/' . $Blog->id }}>
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