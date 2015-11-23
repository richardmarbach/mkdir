<div class="col-sm-5">
  <div class="thumbnail" id="{{$customer->id}}">
    <h4> {{ $customer->name }} </h4>
    <h5>Email: <span>{{ $customer->user ? $customer->user->email : '' }}</span></h5>
    <h5>Address: <span>{{ $customer->address }}</span></h5>
    <h5>Phone: <span>{{ $customer->phone_number }}</span></h5>
    <h5>Points: <span>{{ $customer->points }}</span></h5>
    <h5>Birthdate: <span>{{ date('F d, Y', strtotime($customer->user ? $customer->user->birthdate : '')) }}</span></h5>
    <h5>Roles: 
      <span>
        @if ($customer->user)
          @foreach($customer->user->roles as $role)
            {{ $role->name }}
          @endforeach
        @else
          None
        @endif
      </span>
    </h5>
    <h5>Created on: <span>{{ date('F d, Y', strtotime($customer->created_at)) }}</span></h5>
    <h5>Updated on: <span>{{ date('F d, Y', strtotime($customer->updated_at)) }}</span></h5>

    <button class="btn btn-default" data-toggle="modal" data-target="#edit-modal">Edit</button>
    <button class="btn btn-default" data-toggle="modal" data-target="#delete-modal">Delete</button>
  </div>
</div>