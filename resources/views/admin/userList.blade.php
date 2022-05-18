@include('admin.nav')

<table class="table align-middle mb-0 bg-white p-5 rounded">
@include("admin.search")
  <thead class="bg-light">
    <tr class="bg-info">
      <!-- <th>Id</th> -->
      <th>Name</th>
      <th>Email</th>
      <th>Usertype</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
      
      @foreach($users as $user)

    <tr>
       
      <td>
       {{$user->name}}
      </td>
      <td>
       {{$user->email}}
      </td>
      <td>
       @if($user->usertype == '0')
       User
       @else
       Admin
       @endif
      </td>
      
      <td>
      @if($user->usertype == '0')
      <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('deleteUser',$user->id)}}">Delete</a>
      </button>
      <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('deleteUser',$user->id)}}">Edit</a>
      </button>
       @else
       <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('deleteUser',$user->id)}}">Not allow</a>
       </button>
       <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('deleteUser',$user->id)}}">Edit</a>
      </button>
       @endif
        
      </td>
    </tr>

    @endforeach

  </tbody>
</table>


@include('admin.footer')
            
            
