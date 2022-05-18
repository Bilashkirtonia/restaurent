@include('admin.nav')

<table class="table align-middle mb-0 bg-white p-5 rounded">
@include("admin.search")
  <thead class="bg-light">
    <tr class="bg-info">
      <!-- <th>Id</th> -->
      <th>Name</th>
      <th>Price</th>
      <th>Image</th>
      <th>description</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
      
      @foreach($data as $user)
     
    <tr>
       
      <td>
      {{$user->title}}
      </td>
      <td>
       {{$user->price}}
      </td>
      <td>
        <img height="100" src="foodimage/{{$user->image}}" alt="">
      </td>
      <td>
      {{Str::limit($user->description, 20, $end='.......')}}
      </td>
      <td>
     
      <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('deletefood',$user->id)}}">Delete</a>
      </button>
      <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('editfood',$user->id)}}">Edit</a>
      </button>
       
        
      </td>
    </tr>
    
    @endforeach


  </tbody>
</table>


@include('admin.footer')
            
            
