@include('admin.nav')




<form class="bg-success p-5 " action="{{url('/insertfood')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="row">
      <div class="col-4">
        <div class="form-outline">
        <label class="form-label" for="form12">Title</label>
         <input type="text"  name="title" id="form12" class="form-control bg-white text-dark" />
        </div>
      </div>
      <div class="col-4">
        <div class="form-outline">
        <label class="form-label" for="form12">Price</label>
         <input type="text" name="price" id="form12" class="form-control bg-white" />
        </div>
      </div>
      <div class="col-4">
        <div class="form-outline">
        <label class="form-label" for="form12">Image</label>
        <input type="file" name="image" id="form12" class="form-control bg-white" />
        </div>
      </div>
    </div>
    <div class="row">
      
      <div class="col-12">
        <div class="form-outline">
        <label class="form-label" for="form12">Description</label>
        <input type="text" name="description" id="form12" class="form-control bg-white p-5" />
         
        </div>
      </div>

      <div class="col-12">
        
        <button class="btn btn-primary btn-block mt-2">Send</button>
         
        </div>
      </div>
    </div>

</form>




@include('admin.footer')
            
            
