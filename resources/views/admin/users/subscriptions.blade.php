<x-admin-layout>
    <x-slot name='title'> OQA | Subsciption List </x-slot>
    <x-slot name='page'> Subsciption List </x-slot>
    
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
    
            {{-- Subsciption List --}}
            <div class="table-responsive">
                <table id="myTable" class="table bg-white table-hover">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> User Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Package </th>
                            <th> Subscription Date</th>
                            <th> Package Status </th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->email }} </td>
                                <td> {{ $item->phone }} </td>
                                <td> {{ $item->package_name }} </td>
                                <td> {{ $item->subscription_date }} </td>
                                <td> {{ ($item->status == 0)? 'Unsubscribed': (($item->status == 1)? 'Subscribed' : 'Canceled') }} </td>
                                <td>
                                    <a class="btn btn-danger" href={{ 'delete-item/' . $item->id }}>
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