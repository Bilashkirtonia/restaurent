<div class="row mb-3">
        <div class="col-10">
        
                <label class="visually-hidden text-dark" for="inlineFormSelectPref">Preference</label>
                <select class="select text-dark">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
                
                </select>
            

        </div>

          
          <div class="col-2">
          <form action="{{url('/search')}}" method="get">
          @csrf
              <div class="input-group mr-auto">
                <div class="form-outline">
                <input type="search" id="form1" name="search" class="form-control bg-white" placeholder="Search here"/>
                </div>
             </button>
            </div>
            </form>
          </div>
         
    </div>