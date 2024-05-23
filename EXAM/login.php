<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require"database.php";
    $sql = sprintf("SELECT * FROM user WHERE email = '%s'"
    ,$mysqli->real_escape_string($_POST["email"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    if($user){
    if(password_verify( $_POST["password"],$user[ ! " password_hash"]))
    {
        echo"invalid login";
    }else{
       header("Location: services.html");
    }
    } 
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <h1>Login</h1>
    <form method="post">
    <label for="emial">Email</label><br><br>
    <input type="email" id="email" name="email"><br><br>
    <label for="password">Password</label><br><br>
    <input type="password" id="password" name="password"><br><br>
<button>Log in</button>
 </form>
</body>
</html>