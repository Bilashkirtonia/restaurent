@include('admin.nav')




<form class="bg-success p-5 w-50 m-auto" action="{{url('/insertchef')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <h3 class="h1 text-center font-weight-bold">Add Chefs</h3>
    <div class="row">
      <div class="col-12">
        <div class="form-outline">
        <label class="form-label" for="form12">Name</label>
         <input type="text"  name="name" id="form12" class="form-control bg-white text-dark" />
        </div>
      </div>
      <div class="col-12">
        <div class="form-outline">
        <label class="form-label" for="form12">Title</label>
         <input type="text" name="title" id="form12" class="form-control bg-white text-dark" />
        </div>
      </div>
      <div class="col-12">
        <div class="form-outline">
        <label class="form-label" for="form12">Image</label>
        <input type="file" name="image" id="form12" class="form-control bg-white" />
        </div>
      </div>
      <div class="col-12">     
        <button class="btn btn-primary btn-block mt-2">Send</button>   
      </div>
    </div>
    <!-- <div class="row">
      
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
    </div> -->

</form>




@include('admin.footer')
            
            

            
            
