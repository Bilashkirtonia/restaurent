@include('admin.nav')

<table class="table align-middle mb-0 bg-white p-5 rounded">
    @include("admin.search")
  <thead class="bg-light">
    <tr class="bg-info">
      <!-- <th>Id</th> -->
      <th>Name</th>
      <th>Title</th>
      <th>Image</th>
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
       {{$user->title}}
      </td>
      <td>
        <img height="100" src="foodimage/{{$user->image}}" alt="">
      </td>
     
      <td>
     
      <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('deletechef',$user->id)}}">Delete</a>
      </button>
      <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('editchef',$user->id)}}">Edit</a>
      </button>
       
        
      </td>
    </tr>
    
    @endforeach


  </tbody>
</table>


@include('admin.footer')
            
            
