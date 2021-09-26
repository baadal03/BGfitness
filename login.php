<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  //include 'dbconnect.php' ;
  

    $server="localhost";
     $username="root";
     $password="";
     $dbname="users2430";

$conn=  new mysqli($server,$username,$password,$dbname);

//connectivity

if(!$conn)
{
    die(" not connected to server"."<br>".$conn->connect_error);
  
}
else {
     //echo "server connected to the database";

}


  $email=$_POST["email"];
   $password=$_POST["password"];

    
     $sql=" Select * from users where email='$email' AND password='$password'" ;
     $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);//no. of records are there in database 
     if($num==1){
      echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>successfully</strong> You are loggedin.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
      session_start();
      // $_SESSION['loggedin']=true;
      $_SESSION['email']=$email;
      header("location:index.html"); // redirect the page you want to go
          
         }
         else{
          echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Invalid data</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
     }

     
  

     //if($conn->query($sql)==true)
     
    
  
  $conn->close();
    
}
    





 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>web  world!</title>
  </head>
  <body>

 <section class="section1">

 <h1 class="text-center" style="color:white">LOGIN</h1>
  

    <form method="POST" action="/websites/login.php" style="display:flex ; flex-direction:column ;align-items:center;" >
  <div class="col-md-6">
    <label for="email" class="form-label" style="color:white" >email</label>
    <input type="email" class="form-control" id="email" aria-describedby="email " name="email">

    </div>

    
  <div class="col-md-6">
    <label for="password" class="form-label" style="color:white">Password</label>
    <input  type="password"   class="form-control" id="exampleInputPassword1" name="password">
  </div>

  
  <div>
  <br>
  </div>
  
 <div class="text-align:center">

  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</section>
  
</form>
   
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>