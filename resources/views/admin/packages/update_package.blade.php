<x-admin-layout>
    <x-slot name='title'> MDMS | Update Package </x-slot>
    <x-slot name='page'> Update Package </x-slot>
    <div class="container pl-5 pr-5">
        <form action="{{url('admin/update-package')}}" method="POST">
            @csrf
            <div class="form-group pl-2 pr-2">
                <label>Package Name</label>
                <input type="hidden" name="id" value= "{{ $data['id'] }}" />
                <input type="text" name="name" value="{{ $data['name'] }}" class="form-control" />
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Total Classes</label>
                <input type="text" name="total_classes" value="{{ $data['total_classes'] }}" class="form-control" />
            </div>

            <div class="form-group pl-2 pr-2">
                <label>Price</label>
                <input type="text" name="price" value="{{ $data['price'] }}" class="form-control" />
            </div>

            <div class="col-md-12 d-flex justify-content-end pr-4">
                <button type="submit" class="btn btn-primary ml-3 mb-3"> Update </button>
            </div>

        </form>
    </div>
</x-admin-layout>
