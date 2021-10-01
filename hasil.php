<?php
$username=$_POST['username'];
$password=$_POST['password'];

echo $username;
echo $password;
die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form1.html" method="GET">
       <table>
           <tr>
               <td>username</td>
               <td><input type="name" name="username"></td>
           </tr>
           <tr>
               <td>password</td>
               <td><input type="password" name="password"></td>
           </tr>
       </table>
    </form>
</body>
</html>
