<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{
            background-image: url('back.png');
            /* background-attachment: fixed; */
            background-size: 100%;
            background-repeat: no-repeat;

        }
        .logo{
          float: left; 
          margin-left: 100px; 
          margin-top: 120px; 
          margin-right: 10px; 
          background-attachment: fixed;
        }
        .get_er_uporer_likha{
          float: left;

          margin-left: -140px; 
          margin-top: 90px;
          font-style: italic;

        }
        .welcome{
          float: right;
          font-style: italic;
          color: #7D3C98;
          margin-top: 70px;
          margin-right: 330px;
        }
        .pic{
          float: right;
          margin-left: 20px;

        }
      
        /* a{
            color: rgb(79, 91, 255);
            font-size: 25px;
            font-weight: bold;
            padding: 15px;
            display:inline-block;
        }
        div{background-color:cyan;}
        ul{
            display:inline;
            margin: 0;
            padding: 0;
        }
        ul li{
            display: inline-block;
        }
        ul li:hover{
            background: rgba(148, 151, 148, 0.5);
        }
        ul li:hover ul{
            display: block;
        }
        ul li ul{
            position:absolute;
            background: rgba(144, 159, 247, 0.5);
            width:140px;
            display: none;
        }
        ul li ul li{
            font-size: 18px;
            font-weight: bold;
            display: block;
        }
        ul li ul li:hover{
            background: rgb(247, 234, 234);
        } */
    </style> 
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a style="color:#1ABC9C; font-style: bold;" class="navbar-brand" href="#"><big>MAAT Online Course</big></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.html">For Students</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">     </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.html">For Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
       <!--  <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a style="color:#3BCF0F;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Courses
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Number System</a></li>
            <li><a class="dropdown-item" href="#">C Programming</a></li>
            <li><a class="dropdown-item" href="#">Logic gates</a></li>
            <li><a class="dropdown-item" href="#">Web Design</a></li>
            <li><a class="dropdown-item" href="#">DB Management</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">     </a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.html">Sign Up</a>
        </li>
      </ul>

      <form class="d-flex">

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- <img class = "logo" src="logo.png" alt="This is our brand logo" width="250px" height="250px"> -->
<!-- <h1 class="welcome">Warmest Welcome to Our<br> New Students!!!!</h1> -->
<!-- <img class = "pic" src="poster.png" alt="This is our brand logo" width="800px" height="1200px"> -->


  <a href="sign_up.php" <button style="float: left; margin-left: 500px; margin-top: 140px;" type="button" class="btn btn-primary btn-lg">Get Started!</button></a>
  <h2 style="color: white;" class = "get_er_uporer_likha">New here ?<h2>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <footer>
  <p align="center" style="margin-left: 500px; margin-top: 700px;>&copy;MAAT Officials</p>
  </footer>

</body>
</html>
