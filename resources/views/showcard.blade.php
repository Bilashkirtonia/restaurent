<!DOCTYPE html>
<html lang="en">

  <head>
<base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Restaurant</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <style>
      container{
       
        width:100vw !important;
        background:red !important;
        z-index: -2 !important;
      }
    </style>
    </head>
    
    <body class="h-100 bg-success" style="padding:0 200px;">
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li class="scroll-to-section"><a href="#reservation">
                            @auth
                            <li class="scroll-to-section"><a href="{{url('/showCartFood',Auth::user()->id)}}">
                            Cart[{{$conunt}}]
                            </a></li> 
                           
                            @endauth

                            @guest 
                            Cart[0]
                            @endguest
                            
                           
                         
                            </a></li> 
                            <li class="scroll-to-section"><a href="#reservation">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    <li>
                                    <li class="scroll-to-section"><a href="#reservation"></a></li>
                                    <x-app-layout>   
                                     </x-app-layout>
                                    </li>
                                    @else
                                     <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                        @if (Route::has('register'))
                                        <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif                
                          </li> 
                        </ul>        
                        <!-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> -->
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container p-5" style="margin-top:100px;"> 
      <div class="row">
        <div class="col-8 m-auto  mt-5">
<table class="table align-middle mb-0 bg-white p-5 rounded">
    <div class="row mb-3 ">
        <div class="col-10 ">
        
                
                <select class="select text-dark">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
                </select>
            

        </div>

          <div class="col-2">
              <div class="input-group mr-auto">
                <div class="form-outline">
                <input type="search" id="form1" class="form-control bg-white" placeholder="Search here"/>
                </div>
             
             </button>
            </div>
        </div>
    </div>
  <thead class="bg-light">
    <tr class="bg-info">
      <!-- <th>Id</th> -->
      <th>Food name</th>
      <th>price</th>
      <th>Quinity</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody style="position:relative;">
      <form method="post" action="{{url('/updateOrder')}}">
        @csrf

      @foreach($data as $user)

    <tr>
       
      <td>
      <input type="text" hidden="" value="{{$user->title}}" name="foodname[]" id="form12" class="form-control bg-white text-dark" />
      {{$user->title}}
      </td>
      <td>
      <input type="text" hidden="" value="{{$user->price}}" name="price[]" id="form12" class="form-control bg-white text-dark" />
       {{$user->price}}
      </td>
      
      
      <td>
      <input type="text" hidden="" value="{{$user->quinity}}" name="quinity[]" id="form12" class="form-control bg-white text-dark" />
      {{$user->quinity}}
      </td>
      
      @endforeach
      </tr>
      @foreach($data2 as $data2)
      <tr>
      <td style="position:relative; top:-60px; right:-560px;">
      <button type="button" class="btn btn-link btn-sm btn-rounded">
          <a href="{{url('deletefood1',$data2->id)}}">Remove</a>
      </button>
      </td>
    </tr>
      @endforeach
      

  </tbody>

</table>

      <input type="text"  name="name" id="form12" class=" my-2 form-control bg-white text-dark" placeholder="Name" />
      <input type="number"  name="phone" id="form12" class="form-control bg-white text-dark"placeholder="Phone number" />
      <input type="text"  name="address" id="form12" class="my-2 form-control bg-white text-dark" placeholder="Address"/>
      <input type="submit"  name="submit" id="form12" class="my-2 form-control bg-white text-dark btn btn-success" value="send"/>
</form>


        </div>
      </div>
    </div>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>