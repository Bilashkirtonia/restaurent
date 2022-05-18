@include('admin.nav')

<table class="table align-middle mb-0 bg-white p-5 rounded">
    @include("admin.search")
  <thead class="bg-light">
    <tr class="bg-info">
      <!-- <th>Id</th> -->
      <th>Food name</th>
      <th>Price</th>
      <th>Quinity</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
      
      @foreach($data as $user)

    <tr>
   
      <td>
       {{$user->foodname}}
      </td>
      <td>
       {{$user->price}}
      </td>
      <td>
      {{$user->price}}
      </td>
      <td>
      {{$user->name}}
      </td>
      <td>
      {{$user->phone}}
      </td>
      <td>
      {{$user->address}}
      </td>
      <td>
      
      <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('deleteOrder',$user->id)}}">Delete</a>
      </button>        
      </td>
    </tr>

    @endforeach

  </tbody>
</table>


@include('admin.footer')
            
            

            
            
