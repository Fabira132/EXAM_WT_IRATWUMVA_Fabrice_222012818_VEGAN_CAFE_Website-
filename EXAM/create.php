<?php
$servername="localhost";
$username="root";
$password="";
$database="logindb";
//creating connection
$connection = new mysqli($servername ,$username ,$password ,$database);

$name="";
  $email="";
  $password="";
  $password_hash="";

  if($_SERVER['REQUEST_METHOD']=='POST'){
      $name=$_POST["name"];
      $email=$_POST["email"];
      $phone=$_POST["password"];
    
  }
  do {
    if (empty($name) || empty($email)||empty($password)){
        $errorMessage="All the fields are required";
        break;
    }
    // add new client 
    $sql = "insert into user(name, email, password)values('$name','$email','$password')";
    $result = $connection->query($sql);
    if(!$result){
        $errorMessage = "invalid query: ".$connection->error;
        break;
    }
    $name="";
    $email="";
    $password="";

    $successMessage = "Client added correctly";
    header("location : /fabz/index.php");
  
  }  while (false);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my shop</title>
</head>
<body>

    <div class="container my-5">
        <h2>New Client</h2>

        <?php if(!empty($errorMessage)){echo"$errorMessage";
        } ?>
        <form method="post">  
        
    <div class="row mb-3">
    <label for="name">Name :
                    <input type="text"id="name" name="name" ></label>
               
                

    </div></div>
            <div class="row mb-3">
                <label for="email">Email :
                    <input type="text"id="email" name="email" ></label>
               
    </div></div>
    <div class="row mb-3">
                    <label for="password">Password :
                    <input type="text"id="password" name="password" ></label>
    
    </div></div>
    <?php if(!empty($successMessage)){echo"$successMessage";
        } ?>
    <div class="row mb-3  d-grid">
               <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="row mb-3  d-grid">
               <button type="submit" class="btn btn-outline-primary" href="/fabz/index.php"role="button">Cancel</button>
    </div></div>
</form>
    </div>
</body>
</html> 