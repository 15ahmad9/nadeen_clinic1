<?php

require "config/database.php";


$stmt=$conn->prepare(

"SELECT * FROM reviews ORDER BY id DESC"

);


$stmt->execute();


$reviews=$stmt->fetchAll();


?>



<!DOCTYPE html>

<html lang="ar" dir="rtl">


<head>


<meta charset="UTF-8">

<title>
تقييمات المرضى
</title>


<link rel="stylesheet"
href="assets/css/style.css">


</head>



<body>



<section class="section">


<div class="container">


<h2>

آراء المرضى

</h2>




<div class="row g-4">



<?php foreach($reviews as $review): ?>



<div class="col-lg-4">


<a href="<?php echo $review['google_link']; ?>"
target="_blank">


<div class="review-card">



<div class="stars">


<?php

echo str_repeat(
"★",
$review['rating']
);

?>

</div>



<h5>

<?php echo $review['name']; ?>

</h5>



<p>

<?php echo $review['comment']; ?>

</p>


</div>


</a>


</div>



<?php endforeach; ?>



</div>



<div class="text-center mt-5">


<a href="ضع رابط Google Maps هنا"

class="appointment-btn">

عرض جميع التقييمات على جوجل

</a>


</div>



</div>


</section>



</body>


</html>