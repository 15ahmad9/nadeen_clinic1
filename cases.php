<?php

require "includes/language.php";

require "config/database.php";


$cases =
$pdo->query(
"
SELECT * FROM gallery 
ORDER BY id DESC
"
)->fetchAll();


?>


<!DOCTYPE html>

<html lang="<?=t('lang_code')?>"
dir="<?=t('dir')?>">


<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
<?=t('gallery')?>
</title>


<link rel="stylesheet"
href="assets/css/style.css">


<link rel="stylesheet"
href="assets/css/cases.css">


</head>


<body>


<?php include "includes/navbar.php"; ?>



<section class="cases-section">


<h1>
<?=t('gallery')?>
</h1>



<div class="cases-container">



<?php foreach($cases as $case): ?>


<div class="before-after">



<!-- Before Image -->

<img 
src="uploads/gallery/<?= htmlspecialchars($case['before_image']) ?>"
class="before-image"
alt="Before">





<!-- After Image -->

<div class="after-container">


<img 
src="uploads/gallery/<?= htmlspecialchars($case['after_image']) ?>"
class="after-image"
alt="After">


</div>





<!-- Slider Line -->

<div class="slider-line">


<div class="slider-button">
↔
</div>


</div>





<!-- Range Controller -->

<input 
type="range"
min="0"
max="100"
value="50"
class="slider-control">



</div>


<?php endforeach; ?>



</div>


</section>





<?php include "includes/footer.php"; ?>



<script src="assets/js/main.js"></script>


<script>


document.querySelectorAll('.slider-control')
.forEach(slider => {


slider.addEventListener('input', function(){


let value = this.value;


let container =
this.parentElement;



container.querySelector('.after-container')
.style.width = value + "%";



container.querySelector('.slider-line')
.style.left = value + "%";



});


});


</script>



</body>

</html>