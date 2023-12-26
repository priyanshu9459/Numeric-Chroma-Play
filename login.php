<?php




if(isset($_POST['login'])){
    


require './partials/dbconnect.php';

$email = $_POST('email');
$password = $_POST('password');



$sql = "Select * from users where email '$email'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num == 1){
    while($row=mysqli_fetch_assoc($result)){
 
       
        if(password_verify($password, $row['$password'])){
                 $_SESSION['email'] = "email";
                 $_SESSION['password'] = "password";        
            
            $login = true;
            header("location: form.php");
        }
         else{
        $showError = "Invalid credentials";
    }
    }
   
}




}
?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body>
    <?php 
    
    require './partials/navbar.php'; 
    //cookies set
    
 setcookie("category","login", time() + 604800, "/");
 ?>
      
       <div class="container";
          <h1 class="text-center"><span style="font-size:30px">Signup to our Website</h1></span>
  
      
     <form action="/test/hello.txt" method="post">
       
  <div class="form-group col-md-8">
    <label for="email" class="form-label">Email address</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group col-md-8">
    <label for="password1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password1" id="password1">
  </div>
         <br><button type="submit" class="btn btn-primary" name="login">Login</button>
</form> 

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
