<?php
require'config.php';
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $duplicate = mysqli_query($conn, "SELECT * FROM base WHERE username = '$username'");
    if(mysqli_num_rows($duplicate)>0){
        echo"<script>alert('username Has Already Taken');</script>";
    }
    else{
        if($password == $password){
            $query = "INSERT INTO base VALUES('$username','$email','$password')";
            mysqli_query($conn,$query);
            echo"<script>alert('registration succesful');</script>";}
            else{
                echo"<script>alert('password does not match ');</script>";
            }
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
</head>
<body>
    <h2>Signup Form</h2>
    <form action="signup_process.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" id="submit" value="Signup">
    </form>
</body>
</html>