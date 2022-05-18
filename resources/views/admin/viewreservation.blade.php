@include('admin.nav')
@include("admin.search")
<div class="card">
  <div class="card-body">
  <p>Time : {{$data->time}}</p><p>Date : {{$data->date}}</p>
  <br>
  <hr>
  <br>
  <h5 class="card-title">Name : {{$data->name}}</h5>
  <h5 class="card-title">Email : {{$data->email}}</h5>
  <h5 class="card-title">Phone : {{$data->phone}}</h5>
  <h5 class="card-title">Guest : {{$data->guest}} pepole</h5>
  <br>
    
    
    <p class="card-text">Message : <br>{{$data->message}}</p>
    <br>
    <button type="button" class="btn btn-primary"><a href="/showreservation">Back</a></button>
  </div>
</div>


@include('admin.footer')
            
            
