<?php

require "auth.php";

require "../config/database.php";


if(isset($_GET['id'])){


$id = intval($_GET['id']);



$stmt=$pdo->prepare(
"SELECT image FROM gallery WHERE id=?"
);


$stmt->execute([$id]);


$image=$stmt->fetch();



if($image){


$file=
"../uploads/gallery/"
.$image['image'];



if(file_exists($file)){

unlink($file);

}



$delete=$pdo->prepare(
"DELETE FROM gallery WHERE id=?"
);



$delete->execute([$id]);


}


}



header("Location: gallery.php");

exit;


?>