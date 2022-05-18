@include('admin.nav')
<base href="/public">


<form class="bg-success p-5 " action="{{url('/uploadfood',$data->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="row">
      <div class="col-6">
        <div class="form-outline">
        <label class="form-label" for="form12">Title</label>
         <input type="text" value="{{$data->title}}"  name="title" id="form12" class="form-control bg-white text-dark" />
        </div>
      </div>
      <div class="col-6">
        <div class="form-outline">
        <label class="form-label" for="form12">Price</label>
         <input type="text" value="{{$data->price}}" name="price" id="form12" class="form-control bg-white text-dark" />
        </div>
      </div>
      
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-outline">
        <label class="form-label" for="form12">Title</label>
         <input type="file" value="{{$data->image}}" name="image" id="form12" class="form-control bg-white" />
        </div>
      </div>
      <div class="col-6">
        <img width="300" height="300" src="foodimage/{{$data->image}}" alt="" class="mt-3">
      </div>
      
    </div>
    <div class="row">
      
      <div class="col-12">
        <div class="form-outline">
        <label class="form-label" for="form12">Description</label>
        <input type="text" value="{{$data->description}}" name="description" id="form12" class="text-dark form-control bg-white p-5" />
         
        </div>
      </div>

      <div class="col-12">
        
        <button class="btn btn-primary btn-block mt-2">Send</button>
         
        </div>
      </div>
    </div>

</form>




@include('admin.footer')
            
            
