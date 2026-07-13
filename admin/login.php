<?php

session_start();

require "../config/database.php";


if(isset($_POST['login'])){


$username=$_POST['username'];

$password=$_POST['password'];



$stmt=$pdo->prepare(
"SELECT * FROM admin WHERE username=?"
);


$stmt->execute([$username]);


$admin=$stmt->fetch();



if($admin && password_verify($password,$admin['password'])){


$_SESSION['admin_id']=$admin['id'];

$_SESSION['admin_username']=$admin['username'];


header("Location: dashboard.php");

exit;


}else{


$error="Invalid Login";


}


}

?>


<form method="POST">


<input 
name="username"
placeholder="Username">


<input 
type="password"
name="password"
placeholder="Password">


<button name="login">
Login
</button>


</form>