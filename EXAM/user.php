<?php 
include'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="insert into `crud`(name,email,mobile,password) 
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
      //echo"Data inserted successfully";
      header('location:display.php');  
    }else{
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="name" class="form-control"
     placeholder="enter your name" 
    name="name"autocomplete="off          ">
</div>
<div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control"
     placeholder="enter your email" 
    name="email">
    <div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control"
     placeholder="enter your mobile" 
    name="mobile">
    <div class="form-group">
    <label >password</label>
    <input type="text" class="form-control"
     placeholder="enter your password" 
    name="password">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>
    
</body>
</html>