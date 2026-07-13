<?php

require "../config/database.php";


// إضافة


if(isset($_POST['add'])){


$stmt=$conn->prepare(

"INSERT INTO reviews
(name,rating,comment,google_link)
VALUES(?,?,?,?)"

);


$stmt->execute([

$_POST['name'],

$_POST['rating'],

$_POST['comment'],

$_POST['link']

]);


}




// حذف


if(isset($_GET['delete'])){


$stmt=$conn->prepare(

"DELETE FROM reviews WHERE id=?"

);


$stmt->execute([

$_GET['delete']

]);


}



$reviews=$conn->query(

"SELECT * FROM reviews ORDER BY id DESC"

)->fetchAll();


?>



<?php include "layout/sidebar.php"; ?>


<div class="content">


<h1>
إدارة التقييمات
</h1>



<div class="table-box">


<form method="POST">


<input name="name"
placeholder="اسم العميل">



<input name="rating"
value="5"
type="number">


<textarea name="comment"
placeholder="التعليق"></textarea>


<input name="link"
placeholder="Google Link">


<button name="add">

إضافة

</button>


</form>



<hr>



<table class="table">


<tr>

<th>
الاسم
</th>

<th>
التقييم
</th>

<th>
التعليق
</th>

<th>
حذف
</th>

</tr>



<?php foreach($reviews as $r): ?>


<tr>

<td>
<?= $r['name'];?>
</td>


<td>

<?= $r['rating'];?>

⭐

</td>


<td>

<?= $r['comment'];?>

</td>


<td>

<a href="?delete=<?=$r['id']?>">

حذف

</a>

</td>


</tr>


<?php endforeach; ?>


</table>


</div>


</div>