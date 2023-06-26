<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Langganan</title>
</head>
<body>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Montserrat:wght@800&display=swap');
         
        body{
            background-image: url("login.png");
            background-color: rgba(203, 171, 171, 1);
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        .navbar{
            background-color: rgba(196, 152, 149, 1);
            box-shadow: 0px 7px 18px -9px rgba(255,255,255,0.75);
-webkit-box-shadow: 0px 7px 18px -9px rgba(255,255,255,0.75);
-moz-box-shadow: 0px 7px 18px -9px rgba(255,255,255,0.75);
        }
        .budget{
            font-family: 'Mochiy Pop P One', sans-serif;
        }
        .rec{
            width: 100px;
            height:100px;
            color: azure;
        }
        .mid{
            margin-top: 75px
        }
        .plan{
            font-family: 'Mochiy Pop P One', sans-serif;
        }
        .free{
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            margin-top: 15px;
        }
      .color-bar{
        height: 1px;
        width: 30%;
        background-color: rgba(234, 92, 82, 1);
      }
      .offer{
        background-color: rgba(217, 217, 217, 1);
        border-radius: 10px;
      }
    </style>

    <nav class="navbar navbar-expand-lg text-white">
         <a class="navbar-brand ms-3" href="#">
             <img src="group.png" alt="Logo" width="35" height="33" class="d-inline-block align-text-top">
           </a>
            <a class="nav-link active" aria-current="page" href="#"><h4 class="text-white mt-1 budget">Budget Planner</h4></a>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
     </div>
     
   </nav>


<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mt-5 py-0 plan">
            <h3>Choose your subscription plan {{ Auth::user()->name }}</h3>
        </div>
    </div>
</div>

<div class="container-fluid">
   <div class="row">
    <div class="offset-1 col-4  mid">
      <div class="card offer">
        <div class="card-body">
          <h5 class="card-title text-center">Free Trial</h5>
          <h2 class="text-center free">FREE</h2>
          <center><div class="color-bar text-center"></div></center>
          <ul>
              <li>
                  lorem
              </li>
              <li>
                lorem
            </li>
            <li>
                lorem
            </li>
          </ul>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <center><a href="{{ route('dashboard') }}" class="btn btn-danger">Get Started</a></center>
        </div>
      </div>
    </div>
    <div class="offset-1 col-4 mid">
      <div class="card offer">
        <div class="card-body">
          <h5 class="card-title text-center">Premium</h5>
          <h2 class="text-center free">Premium</h2>
          <center><div class="color-bar text-center"></div></center>
          <ul>
            <li>
                lorem
            </li>
            <li>
              lorem
          </li>
          <li>
              lorem
          </li>
        </ul>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <center><a href="#" class="btn btn-danger">Start Trial</a></center>
        </div>
      </div>
    </div>
  </div>
 </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>