<?php

session_start();

require "../config/database.php";


if(isset($_POST['login'])){


$username=$_POST['username'];

$password=$_POST['password'];



$stmt=$conn->prepare(
"SELECT * FROM admins WHERE username=?"
);


$stmt->execute([$username]);


$admin=$stmt->fetch();



if($admin && password_verify($password,$admin['password'])){


$_SESSION['admin']=$admin['username'];


header("Location:dashboard.php");

exit;


}else{


$error="بيانات الدخول غير صحيحة";


}


}


?>


<form method="POST">


<h2>
Admin Login
</h2>


<input 
type="text"
name="username"
placeholder="Username">


<input 
type="password"
name="password"
placeholder="Password">


<button name="login">

دخول

</button>



</form>