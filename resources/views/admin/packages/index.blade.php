<x-admin-layout>
    <x-slot name='title'> OQA | Package List </x-slot>
    <x-slot name='page'> Package List </x-slot>
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
        {{-- Package List --}}
        <a href="{{url('admin/add-package')}}" class="btn btn-primary float-right"> Create </a><br>
        <div class="table-responsive mt-4">
            <table id="myTable" class="table bg-white table-hover">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Total Classes </th>
                        <th> Price </th>
                        <th> Delete </th>
                        <th> Edit </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td> {{ $package['id'] }} </td>
                            <td> {{ $package['name'] }} </td>
                            <td> {{ $package['total_classes'] }} </td>
                            <td> {{ $package['price'] }} </td>

                            <td>
                                <a class="btn btn-danger" href={{ 'delete-package/' . $package['id'] }}>
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href={{ 'update-package/' . $package['id'] }}>
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
