<?php


session_start();


if(!isset($_SESSION['admin'])){

header("Location:login.php");

exit;

}


require "../config/database.php";




// إضافة صورة


if(isset($_POST['upload'])){


$title=$_POST['title'];


$image=$_FILES['image']['name'];


$tmp=$_FILES['image']['tmp_name'];



$path="../uploads/cases/".$image;



move_uploaded_file($tmp,$path);



$stmt=$conn->prepare(

"INSERT INTO gallery(image,title)
VALUES(?,?)"

);


$stmt->execute([

$image,

$title

]);


}




// حذف صورة


if(isset($_GET['delete'])){


$id=$_GET['delete'];



$stmt=$conn->prepare(

"SELECT image FROM gallery WHERE id=?"

);


$stmt->execute([$id]);


$file=$stmt->fetch();



unlink("../uploads/cases/".$file['image']);



$stmt=$conn->prepare(

"DELETE FROM gallery WHERE id=?"

);


$stmt->execute([$id]);


}




$cases=$conn->query(

"SELECT * FROM gallery ORDER BY id DESC"

)->fetchAll();



?>



<h2>
إدارة الحالات
</h2>



<form method="POST"
enctype="multipart/form-data">


<input 
type="text"
name="title"
placeholder="عنوان الحالة">



<input 
type="file"
name="image">



<button name="upload">

رفع الصورة

</button>


</form>

<hr>


<div>


<?php foreach($cases as $case): ?>


<div>


<img 
src="../uploads/cases/<?php echo $case['image']; ?>"
width="200">



<h4>

<?php echo $case['title']; ?>

</h4>


<a href="?delete=<?php echo $case['id']; ?>">

حذف

</a>


</div>



<?php endforeach; ?>


</div>