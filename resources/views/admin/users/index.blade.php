<x-admin-layout>
<x-slot name='title'> OQA | User List </x-slot>
<x-slot name='page'> User List </x-slot>

<section class="container pl-3 pr-3">
        {{-- Search Form --}}
        <form class="form-group mb-3" action="">
            <div class="row">
                <input class="form-control col-md-10 col-sm-7 ml-2" type="search" name="search"
                    placeholder="Search a User by User Name or Email" value="" />
                <button class="btn btn-primary ml-2 pl-4 pr-4" data-toggle="tooltip" data-html="true" title="Search"><i
                        class="fa fa-search"></i></button>
                <a href="{{ url('/admin/users') }}">
                    <button class="btn btn-secondary ml-1 pl-4 pr-4" type="button" data-toggle="tooltip"
                        data-html="true" title="Reset"><i class="fa fa-undo-alt"></i></button>
                </a>
            </div>
        </form>

        {{-- User List --}}
        <div class="table-responsive">
            <table id="myTable" class="table bg-white table-hover">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Package </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td> {{ $user['id'] }} </td>
                            <td> {{ $user['name'] }} </td>
                            <td> {{ $user['email'] }} </td>
                            <td>
                                <a class="btn btn-success" href={{ 'subscribe-package/' . $user['id'] }}>
                                   Subscribe
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href={{ 'delete-user/' . $user['id'] }}>
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>