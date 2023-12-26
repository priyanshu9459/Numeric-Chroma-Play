
<?php


//http://localhost/test/loginpage/signup.php

if(isset($_POST['signup'])){  

require './partials/dbconnect.php';





    

$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($password == $cpassword){
    
    //$hash = password_hash($password);
    
    
    
                                                                             //$hash
   $sql="INSERT INTO `users` (`email`, `password`, `dt`) VALUES ('$email', '$password', CURRENT_TIMESTAMP)"; 
  $result = mysqli_query($conn, $sql);
}else {
    echo 'Incorrect Password';
           
}   
}
?>

<?php 
    
 setcookie("category","login", time() + 604800, "/");
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Signup Page</title>
  </head>
  <body>
  <?php 
    
    require './partials/navbar.php';
 ?>
    
<?php

     if($result)  {  
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Your account is created!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
     
     }
             
             
             
?>
       <div class="container";
          <h1 class="text-center"><span style="font-size:30px">Signup to our Website</h1></span>   
         

     <form action="/test/loginpage/signup.php" method="post">
       
  <div class="form-group">
    <label for="email" class="form-label">Useername</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="form-group">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" id="cpassword">
  </div>
         <br><button type="submit" class="btn btn-primary" name="signup">Signup</button> <button type="reset" class="btn btn-primary" value="Reset">Reset</button>
</form> 
      
  </div>
      
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

