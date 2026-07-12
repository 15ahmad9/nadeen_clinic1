<?php

require "config/database.php";


$stmt=$conn->prepare(
"SELECT * FROM gallery ORDER BY id DESC"
);

$stmt->execute();

$cases=$stmt->fetchAll();


?>


<!DOCTYPE html>

<html lang="ar" dir="rtl">


<head>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
حالات العلاج | عيادة د. نادين عطاري
</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;800&display=swap"
rel="stylesheet">


<link rel="stylesheet"
href="assets/css/style.css">


</head>


<body>



<!-- Header -->


<nav class="navbar navbar-expand-lg bg-white shadow-sm">


<div class="container">


<a class="navbar-brand"
href="index.php">


<img src="assets/images/logo.png"
width="80">


</a>


</div>


</nav>




<section class="section">


<div class="container">


<h2>

حالات تم علاجها

</h2>



<div class="row g-4">



<?php foreach($cases as $case): ?>



<div class="col-lg-4 col-md-6">


<div class="case-card">


<img src="uploads/cases/<?php echo $case['image']; ?>">



<h4>

<?php echo $case['title']; ?>

</h4>



<p>

<?php echo $case['description']; ?>

</p>



</div>


</div>



<?php endforeach; ?>



</div>


</div>


</section>




</body>

</html>