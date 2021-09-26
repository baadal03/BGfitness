<?php

   


  // if( !empty($name) || !empty($age) || !empty($gender) || !empty($phone)){

if(isset($_POST['name'])){ 
$server="localhost";
$username="root";
$password="";
$dbname="logo";

$conn=  new mysqli($server,$username,$password,$dbname);

//connectivity

if(!$conn)
{
    die(" not connected to server"."<br>".$conn->connect_error);
}
else {
  //    echo "server connected to the database"
}
 
 
  $name=$_POST["name"];
  $age=$_POST["age"]; 
  $gender=$_POST["gender"];
  $phone =$_POST["phone"];
 
  $sql="INSERT INTO `path` ( `Name`, `Age`, `Gender`, `phone`) VALUES ('$name', '$age', '$gender', '$phone')";
  //echo $sql;;

    $result=mysqli_query($conn,$sql);
   
    if($result)
        {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>successfully</strong> You have enter the  data successfully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>' ;
       //echo "successfully inserted ";*/
       }
       else{ 
           echo "error: $sql <br> $conn->error";   

        }


       
    


    
   // else{

    //echo" all field required";

    
    $conn->close();
    
}
   
    
 

        
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Details</title>
   
  
</head>
    <body>
      <section class="section1">
  
        
      
        
        <h3 class="pod">Clients Details</h3>
      
        <p> </p>
        

       
        
      
        <form  class="change "method="POST" action="join_now.php" >

    
        
        <input type="text" name="name" id="name" placeholder="enter the name" required><br>

        
          <input type="text"  name="age" id="age" placeholder="enter the age" required><br>
        
        
        <input type="text"  name="gender" id="gender"  placeholder="enter gender" required><br>
      
        
        <input type="text"  name="phone" id="phonenumber"  placeholder="enter phone number" required><br>
        

        
        <button class="btn">submit</button>
       
    </form>
        </div>
</section>
        
        <div style="color:red">for more details contact to<a  href="mailto:badalgunjiyal24@gmail.com?hello how are you">email</a>
            </div>
            
        

            
    
   
</body>
</html>

