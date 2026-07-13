<?php

require "auth.php";

require "../config/database.php";


$id=$_GET['id'];



$stmt=$pdo->prepare(
"DELETE FROM reviews WHERE id=?"
);



$stmt->execute([$id]);



header("Location: reviews.php");

exit;

?>