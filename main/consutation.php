<!DOCTYPE html>
<html>

<head>
    <title> BUILD MASTER </title>
</head>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" type = "text/css" href ="../css/myrestaurant.css">
<link rel="stylesheet" type = "text/css" href ="../css/bootstrap.css">
<link rel="stylesheet" type = "text/css" href ="../function/button.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">




<body>
<style>
body {
  background-image:url('../building.avif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-size: 100% 100%;
}
</style>

    
<div class="container responsive" style="width:95%; ">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link " href="view.php">Home
            
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="testimonial.php">Testimonial</a>        
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contractor_list.php">Contractor</a>        
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="services.php">Services</a>        
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contact.php">Contact Us</a>        
        </li>
      </ul>
    </div>
  </div>
</nav>


<br>
<br>

<br>
<br>

<center>
<font color="green" style="font-family: Arial;"><h1><b> Book Now</b></h1> </font>
</center>
<br>
<br>
<div class="card card-info">
    <div class="card-header">
      <center>
    <h3 class="card-title">Book here</h3>
</center>
    

    </div>
<form class="form-horizontal" action="services.php" method="POST">
    
    <div class="card-body">

        <div class="form-group row" >
        <label for="input" class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="inputname" name="name" placeholder="First Name">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Middle Name</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="inputname" name="name" placeholder="Middle Name">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="inputname" name="name" placeholder="last Name">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Adress</label>
        <div class="col-sm-10">
            <input type="adress" class="form-control" id="purok" name="adress" placeholder="Adress">
        </div>
        </div>  

       
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <center>
            <button type="submit" class="btn btn-info" onclick="return confirm('Are you sure?')">Submit</button>
            <a class="btn btn-secondary btn-bg" href="services.php">
                
               Cancel
            </a>
        </center>
        
    </div>
    <!-- /.card-footer -->
    </form>

</div>
  


</div>
</body>