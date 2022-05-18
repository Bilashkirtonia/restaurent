<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <link rel="stylesheet" href="../assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="../assets/css/owl-carousel.css">

    <link rel="stylesheet" href="../assets/css/lightbox.css">

</head>
<body>


<div class="container">
    <form action="{{url('/order_cart',$data->id)}}" method="post">
        @csrf
    <div class="row">
        <div class="col-8 m-auto">
        <h1 class="h1 text-center font-weight-bold">Add cart </h1>
        <div class="card shadow">   
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../foodimage/{{$data->image}}" class="img-fluid"/>
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$data->title}}</h5>               
                <p class="card-text">{{$data->description}}</p>
                <h6 class="card-title">{{$data->price}}</h6>
                <input type="number" name="quinity" min="1" class="input-form"><br>
          
                <button class="btn btn-primary mt-2">Add cart</button>
            </div>
            </div>
        </div>
    </div>
    </form>
</div>



  
    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/accordions.js"></script>
    <script src="../assets/js/datepicker.js"></script>
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script> 
    <script src="../assets/js/slick.js"></script> 
    <script src="../assets/js/lightbox.js"></script> 
    <script src="../assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>
    <script>  
</body>
</html>