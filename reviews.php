<?php

require "includes/language.php";

require "config/database.php";


$reviews=$pdo->query(
"
SELECT * FROM reviews
WHERE status='approved'
ORDER BY id DESC
LIMIT 30
"
)->fetchAll();


?>


<!DOCTYPE html>

<html lang="<?=t('lang_code')?>"
dir="<?=t('dir')?>">


<head>

<link rel="icon"
href="assets/images/logo.png">


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet"
href="assets/css/style.css">


<link rel="stylesheet"
href="assets/css/reviews.css">


</head>



<body>


<?php include "includes/navbar.php"; ?>



<section class="reviews-section">


<h1>
<?=t('reviews_title')?>
</h1>




<div class="reviews-grid">



<?php foreach($reviews as $review): ?>
    
<?php

$text = trim($review['review']);

$isArabic = preg_match('/\p{Arabic}/u', $text);

$direction = $isArabic ? 'rtl' : 'ltr';

?>

<a 
href="https://maps.app.goo.gl/cv6Pss4AknpRn5Q3A"
target="_blank"
class="review-card">



<div class="review-header">



<div class="avatar">


<?php if($review['avatar']): ?>

<img src="uploads/reviews/<?= $review['avatar'] ?>">

<?php else: ?>

<?=mb_substr($review['name'],0,1)?>

<?php endif; ?>


</div>



<div>


<h3>
<?=htmlspecialchars($review['name'])?>
</h3>


<div class="stars">


<?php

for($i=1;$i<=5;$i++){

echo $i <= $review['rating']
?
"★"
:
"☆";

}

?>

</div>


</div>


</div>


<p class="review-text"
dir="auto">

<?=htmlspecialchars($review['review'])?>

</p>



</a>



<?php endforeach; ?>


</div>



<a 
href="https://maps.app.goo.gl/cv6Pss4AknpRn5Q3A"
target="_blank"
class="google-btn">

<?=t('google_reviews')?>

</a>



</section>



<?php include "includes/footer.php"; ?>

<script src="assets/js/main.js"></script>
</body>

</html>