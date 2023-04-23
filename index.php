<?php 

session_start();
$conn = mysqli_connect('localhost','root','','db_school') or die ('Unable to connect') 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
           text-align: center;
         I
       .field{
          margin-bottom: 20px;
   </style>
</head>
<body>
    <h2>Please Login</h2>
   <div>
       <form action "index.php" method = "post">
           <input type "text" class = "field" name = "Username" placeholder ="Username" required = ""><br/>
           <input type = "password" class = "field" name = "Pass" placeholder = "Password" required = ""><br/>
           <input type = "submit" class = "field" name = "Login" value = "Login">
      </form>
      
   </div>
</body>
</html>