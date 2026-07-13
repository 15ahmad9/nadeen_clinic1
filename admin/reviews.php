<?php

require "auth.php";

require "../config/database.php";


$reviews = $pdo->query(
"
SELECT * FROM reviews
ORDER BY id DESC
"
)->fetchAll();


?>


<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="admin.css">

</head>


<body>


<?php include "includes/sidebar.php"; ?>


<div class="main">


<div class="topbar">


<h2>
Reviews Management
</h2>


<a href="add_review.php" class="btn">
+ Add Review
</a>


</div>



<div class="card">



<table class="admin-table">


<thead>

<tr>

<th>
Name
</th>


<th>
Rating
</th>


<th>
Review
</th>


<th>
Status
</th>


<th>
Actions
</th>


</tr>

</thead>



<tbody>


<?php foreach($reviews as $review): ?>


<tr>


<td>

<?=htmlspecialchars($review['name'])?>

</td>



<td>

<?php

for($i=1;$i<=5;$i++){

echo $i <= $review['rating']
?
"★"
:
"☆";

}

?>

</td>




<td>

<?=htmlspecialchars(
mb_substr($review['review'],0,50)
)?>

...

</td>




<td>


<?php if($review['status']=="approved"): ?>


<span class="active">
Visible
</span>


<?php else: ?>


<span class="hidden">
Hidden
</span>


<?php endif; ?>


</td>




<td>


<a class="btn"
href="toggle_review.php?id=<?=$review['id']?>">

Toggle

</a>



<a class="delete-btn"
href="delete_review.php?id=<?=$review['id']?>"
onclick="return confirm('Delete review?')">

Delete

</a>


</td>


</tr>


<?php endforeach; ?>


</tbody>


</table>


</div>


</div>


</body>

</html>