<?php

require "../config/database.php";


$cases=$conn->query(
"SELECT COUNT(*) FROM gallery"
)->fetchColumn();


$reviews=$conn->query(
"SELECT COUNT(*) FROM reviews"
)->fetchColumn();


$appointments=$conn->query(
"SELECT COUNT(*) FROM appointments"
)->fetchColumn();


?>


<link rel="stylesheet" href="admin.css">


<?php include "layout/sidebar.php"; ?>


<div class="content">


<h1>
لوحة التحكم
</h1>



<div class="row mt-5 g-4">



<div class="col-md-4">

<div class="stat-card">

<h2>
<?php echo $cases;?>
</h2>

<p>
عدد الحالات
</p>

</div>

</div>




<div class="col-md-4">

<div class="stat-card">

<h2>
<?php echo $reviews;?>
</h2>

<p>
التقييمات
</p>

</div>

</div>





<div class="col-md-4">

<div class="stat-card">

<h2>
<?php echo $appointments;?>
</h2>

<p>
الحجوزات
</p>

</div>

</div>



</div>


</div>