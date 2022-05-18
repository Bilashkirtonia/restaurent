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
      
      @foreach($data as $user)

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
    
      </td>
    </tr>

    @endforeach

  </tbody>
</table>


@include('admin.footer')
            
            
