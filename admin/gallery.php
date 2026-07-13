<?php

require "auth.php";

require "../config/database.php";



if(isset($_POST['upload'])){


$before = $_FILES['before_image'];

$after = $_FILES['after_image'];



$allowed = [
    'image/jpeg',
    'image/png',
    'image/webp'
];



if(
    in_array($before['type'],$allowed) &&
    in_array($after['type'],$allowed)
){



if(
    $before['size'] <= 5*1024*1024 &&
    $after['size'] <= 5*1024*1024
){



$beforeName =
uniqid().'_before.'.
pathinfo(
    $before['name'],
    PATHINFO_EXTENSION
);



$afterName =
uniqid().'_after.'.
pathinfo(
    $after['name'],
    PATHINFO_EXTENSION
);


$uploadDir = "../uploads/gallery/";

if(!is_dir($uploadDir)){
    mkdir($uploadDir, 0777, true);
}

move_uploaded_file(
    $before['tmp_name'],
    $uploadDir.$beforeName
);



move_uploaded_file(
    $after['tmp_name'],
    $uploadDir.$afterName
);



$stmt=$pdo->prepare(
"
INSERT INTO gallery
(before_image,after_image)
VALUES(?,?)
"
);



$stmt->execute([
    $beforeName,
    $afterName
]);



}


}


}



$images=$pdo->query(
"
SELECT * FROM gallery 
ORDER BY id DESC
"
)->fetchAll();



?>



<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="admin.css">

<link rel="stylesheet" href="gallery.css">

</head>



<body>



<?php include "includes/sidebar.php"; ?>



<div class="main">



<div class="gallery-container">



<h2>
Gallery Management
</h2>




<form method="POST"
enctype="multipart/form-data"
class="upload-box">



<label>
Before Image
</label>


<input 
id="beforeInput"
type="file"
name="before_image"
accept="image/*"
required>



<br><br>



<label>
After Image
</label>



<input 
id="afterInput"
type="file"
name="after_image"
accept="image/*"
required>




<div class="preview">



<img id="beforePreview"
style="display:none;">



<img id="afterPreview"
style="display:none;">



</div>



<br>



<button class="btn"
name="upload">

Upload Case

</button>



</form>






<div class="gallery-grid">



<?php foreach($images as $img): ?>


<div class="image-card">



<div style="display:flex;gap:10px;">



<div>

<p>Before</p>

<img 
src="../uploads/gallery/<?=htmlspecialchars($img['before_image'])?>">

</div>



<div>

<p>After</p>

<img 
src="../uploads/gallery/<?=htmlspecialchars($img['after_image'])?>">

</div>



</div>




<div class="image-footer">



<a class="delete-btn"
href="delete_image.php?id=<?=$img['id']?>"
onclick="return confirm('Delete this case?')">

Delete

</a>



</div>



</div>



<?php endforeach; ?>



</div>



</div>



</div>





<script>


const beforeInput =
document.getElementById('beforeInput');


const afterInput =
document.getElementById('afterInput');



const beforePreview =
document.getElementById('beforePreview');


const afterPreview =
document.getElementById('afterPreview');




beforeInput.onchange=function(){


let file=this.files[0];


if(file){

beforePreview.src=
URL.createObjectURL(file);

beforePreview.style.display="block";

}


}




afterInput.onchange=function(){


let file=this.files[0];


if(file){

afterPreview.src=
URL.createObjectURL(file);

afterPreview.style.display="block";

}


}



</script>



</body>

</html>