<?php

require "auth.php";

require "../config/database.php";


$id=$_GET['id'];



$stmt=$pdo->prepare(
"
UPDATE reviews

SET status =

CASE

WHEN status='approved'
THEN 'hidden'

ELSE 'approved'

END

WHERE id=?
"
);



$stmt->execute([$id]);



header("Location: reviews.php");

exit;

?>