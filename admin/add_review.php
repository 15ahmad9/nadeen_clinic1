<?php

require "auth.php";

require "../config/database.php";


if(isset($_POST['save'])){


$name=$_POST['name'];

$rating=$_POST['rating'];

$review=$_POST['review'];



$stmt=$pdo->prepare(
"
INSERT INTO reviews
(name,rating,review,status)

VALUES(?,?,?,'approved')
"
);



$stmt->execute([
$name,
$rating,
$review
]);



header("Location: reviews.php");

exit;


}

?>


<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="admin.css">

</head>


<body>


<?php include "includes/sidebar.php"; ?>


<div class="main">


<div class="card">


<h2>
Add Review
</h2>


<form method="POST">



<input 
class="admin-input"
name="name"
placeholder="Patient Name"
required>



<select
class="admin-input"
name="rating">


<option value="5">
★★★★★
</option>

<option value="4">
★★★★
</option>

<option value="3">
★★★
</option>

<option value="2">
★★
</option>

<option value="1">
★
</option>


</select>



<textarea
class="admin-input"
name="review"
placeholder="Review text"
required></textarea>




<button class="btn"
name="save">

Save

</button>


</form>


</div>


</div>


</body>

</html>