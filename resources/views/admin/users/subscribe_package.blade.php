<x-admin-layout>
    <x-slot name='title'> EQA | Add Subscription </x-slot>
    <x-slot name='page'> Add Subscription </x-slot>
    <div class="container pl-5 pr-5">
        <form action="{{url('admin/subscribe-package')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{$user->user_id}}">
            <div class="form-group pl-2 pr-2">
                <label for="">Package</label>
                <select name="plan_id" class="custom-select">
                    @foreach ($packages as $package)
                    <option value="{{$package->id}}"> {{$package->name}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group pl-2 pr-2">
                <label> Subsciption Date </label>
                <input type="date" name="subscription_date" class="form-control" placeholder="Enter Subscription Date" />
                <span class="text-danger">
                    @error('subscription_date')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group pl-2 pr-2">
                <label for="status">Status</label>
                <select name="status" class="custom-select">
                    @if ($data == null)
                    <option selected>Unsubscribed</option>
                    <option value="1" >Subscribed</option>

                    @else
                    <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Unsubscribed</option>
                    <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Subscribed</option>
                    <option value="2" {{ $data->status == 2 ? 'selected' : '' }}>Cancled</option>
                    @endif
                </select>
            </div>

            <div class="d-flex justify-content-end pr-2">
                <button type="submit" class="btn btn-primary mt-3 mb-3"> Add Subscription </button>
            </div>
        </form>
    </div>
</x-admin-layout>
