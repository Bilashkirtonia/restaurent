@include('admin.nav')

<table class="table align-middle mb-0 bg-white p-5 rounded">
@include("admin.search")
  <thead class="bg-light">
    <tr class="bg-info">
      <!-- <th>Id</th> -->
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Guest</th>
      <th>Date</th>
      <th>Time</th>
      <th>Message</th>
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
      {{$user->phone}}
      </td>
      <td>
       {{$user->guest}}
      </td>
      <td>
        {{$user->date}}
      </td>
      <td>
       {{$user->time}}
      </td>
      <td>
      {{Str::limit($user->message, 20, $end='.......')}}
       
      </td>
      <td>
      <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('viewreservation',$user->id)}}">View</a>
      </button>
      ||
      <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('deletereservation',$user->id)}}">Delete</a>
      </button>
     
      
       
        
      </td>
    </tr>
    
    @endforeach


  </tbody>
</table>


@include('admin.footer')
            
            
