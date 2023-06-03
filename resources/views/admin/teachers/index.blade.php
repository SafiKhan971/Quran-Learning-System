<x-admin-layout>
    <x-slot name='title'> EQA | Teacher List </x-slot>
    <x-slot name='page'> Teacher List </x-slot>
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
        {{-- Teacher List --}}
        <a href="{{url('admin/add-teacher')}}" class="btn btn-primary float-right"> Create </a><br>
        <div class="table-responsive mt-4">
            <table id="myTable" class="table bg-white table-hover">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th> Address </th>
                        <th> Picture </th>
                        <th> Delete </th>
                        <th> Edit </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td> {{ $teacher['id'] }} </td>
                            <td> {{ $teacher['name'] }} </td>
                            <td> {{ $teacher['email'] }} </td>
                            <td> {{ $teacher['phone'] }} </td>
                            <td> {{ $teacher['address'] }} </td>
                            <td>
                                <img src="{{ asset('storage/' . $teacher->image) }}" width="30px" height="50px">
                            </td>


                            <td>
                                <a class="btn btn-danger" href={{ 'delete-teacher/' . $teacher['id'] }}>
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href={{ 'update-teacher/' . $teacher['id'] }}>
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
