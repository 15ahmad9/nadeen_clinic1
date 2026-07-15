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


<!DOCTYPE html>

<html lang="en">

<head>
<link rel="icon"
href="../assets/images/logo.png">
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Admin Login</title>


<style>


:root{

--primary:#4aad9f;

--dark:#12394d;

--white:#ffffff;

--bg:#F8FAFC;

}



*{

margin:0;

padding:0;

box-sizing:border-box;

font-family:Arial, sans-serif;

}



body{


min-height:100vh;

background:

linear-gradient(
135deg,
#12394d,
#406763
);


display:flex;

align-items:center;

justify-content:center;


padding:20px;


}




.login-box{


width:100%;

max-width:420px;


background:white;


padding:45px 40px;


border-radius:25px;


box-shadow:

0 20px 50px rgba(0,0,0,.25);


text-align:center;


}




.login-logo img{


width:100px;

margin-bottom:20px;


}



.login-box h2{


color:var(--dark);

font-size:28px;

margin-bottom:10px;


}



.login-box p{


color:#777;

margin-bottom:30px;


}





.input-group{


margin-bottom:20px;


}



.input-group input{


width:100%;


padding:15px 20px;


border-radius:30px;


border:1px solid #ddd;


outline:none;


font-size:16px;


transition:.3s;


}



.input-group input:focus{


border-color:var(--primary);


box-shadow:

0 0 10px rgba(74,173,159,.3);


}




.login-btn{


width:100%;


padding:15px;


border:none;


border-radius:30px;


background:var(--primary);


color:white;


font-size:17px;


font-weight:bold;


cursor:pointer;


transition:.3s;


}



.login-btn:hover{


background:#406763;


transform:translateY(-2px);


}




.error{


background:#ffe5e5;


color:#c0392b;


padding:12px;


border-radius:15px;


margin-bottom:20px;


}





.footer-text{


margin-top:30px;


font-size:13px;


color:#888;


}



@media(max-width:480px){


.login-box{


padding:35px 25px;


}



.login-box h2{


font-size:24px;


}


}



</style>


</head>


<body>



<div class="login-box">



<div class="login-logo">

<img src="../assets/images/logo.png" alt="Logo" style="background: #12394d;">

</div>



<h2>

Admin Login

</h2>


<p>

Dr. Nadeen Attari Clinic

</p>



<?php if(isset($error)): ?>

<div class="error">

<?= $error ?>

</div>

<?php endif; ?>




<form method="POST">



<div class="input-group">

<input 
name="username"
placeholder="Username"
required>

</div>




<div class="input-group">

<input 
type="password"
name="password"
placeholder="Password"
required>

</div>




<button 
class="login-btn"
name="login">

Login

</button>



</form>



<div class="footer-text">

Powered by AG Solution

</div>



</div>



</body>

</html>