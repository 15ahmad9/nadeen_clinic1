<nav class="navbar">


<div class="nav-logo">

<a href="index.php">

<img src="assets/images/logo.png" alt="Logo">

</a>

</div>



<div class="nav-links">


<a href="index.php">
<?=t('home')?>
</a>


<a href="booking.php">
<?=t('booking')?>
</a>


<a href="cases.php">
<?=t('gallery')?>
</a>


<a href="reviews.php">
<?=t('reviews')?>
</a>


<a href="certificates.php">
<?=t('certificates')?>
</a>


<a href="location.php">
<?=t('location')?>
</a>


</div>




<div class="nav-language">


<a href="<?=switch_lang_url($lang=='ar'?'en':'ar')?>">

<?=t('language')?>

</a>


</div>



</nav>