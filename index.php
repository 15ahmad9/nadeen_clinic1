<?php

require "includes/language.php";

?>

<!DOCTYPE html>

<html lang="<?=t('lang_code')?>"
dir="<?=t('dir')?>">


<head>

<link rel="stylesheet" href="assets/css/style.css">

</head>


<body>


<?php include "includes/navbar.php"; ?>



<section class="hero">


<div class="hero-overlay">


<div class="hero-container">





<div class="hero-content">



<h1>

<?=t('hero_title')?>

</h1>



<h2>

<?=t('clinic_name')?>

</h2>




<p>

<?=t('hero_description')?>

</p>




<div class="hero-buttons">


<a class="btn whatsapp"
href="https://wa.me/962796900000"
target="_blank">

<?=t('whatsapp')?>

</a>



<a class="btn call"
href="tel:0796900000">

<?=t('call')?>

</a>




<a class="btn instagram"
href="https://www.instagram.com/drnadeenattari"
target="_blank">

<?=t('instagram')?>

</a>



</div>


<div class="hero-certificates">


<div>
<span>✓</span>
<?=t('certificate_1')?>
</div>


<div>
<span>✓</span>
<?=t('certificate_2')?>
</div>


<div>
<span>✓</span>
<?=t('certificate_3')?>
</div>


<div>
<span>✓</span>
<?=t('certificate_4')?>
</div>

<div>
<span>✓</span>
<?=t('certificate_5')?>
</div>

</div>


</div>

<div class="hero-image">


<div class="doctor-frame">


<img src="assets/images/doctor_hero.png"
alt="Dr Nadeen">


<div class="doctor-card">

<h4>
<?=t('doctor_name')?>
</h4>


<p>
<?=t('doctor_specialty')?>
</p>


</div>


</div>


</div>
</div>


</div>


</section>


<section class="about-section">


<div class="about-container">



<!-- Doctor Image -->

<div class="about-image">


<img src="assets/images/doctor.png"
alt="Dr. Nadeen Attari">


</div>




<!-- Content -->

<div class="about-content">


<span class="about-label">

<?=t('about')?>

</span>



<h2>

<?=t('doctor_name')?>

</h2>




<h3>

<?=t('doctor_specialty')?>

</h3>




<p>

<?=t('about_description')?>

</p>



<p>

<?=t('about_description_3')?>

</p>




<div class="about-tags">


<span>
<?=t('certificate_1')?>
</span>


<span>
<?=t('certificate_2')?>
</span>


<span>
<?=t('certificate_3')?>
</span>


<span>
<?=t('certificate_4')?>
</span>

<span>
<?=t('certificate_5')?>
</span>

</div>


</div>



</div>


</section>


<section class="services-section">


<div class="section-title">

<h2>
<?=t('services_title')?>
</h2>

<p>
<?=t('services_description')?>
</p>

</div>



<div class="services-grid">



<div class="service-card">

<div class="service-icon">
🦷
</div>

<h3>
<?=t('orthodontics')?>
</h3>

<p>
<?=t('orthodontics_desc')?>
</p>

</div>




<div class="service-card">

<div class="service-icon">
✨
</div>


<h3>
<?=t('implants')?>
</h3>


<p>
<?=t('implants_desc')?>
</p>


</div>





<div class="service-card">


<div class="service-icon">
😁
</div>


<h3>
<?=t('veneers')?>
</h3>


<p>
<?=t('veneers_desc')?>
</p>


</div>





<div class="service-card">


<div class="service-icon">
⭐
</div>


<h3>
<?=t('whitening')?>
</h3>


<p>
<?=t('whitening_desc')?>
</p>


</div>




</div>


</section>


<section class="gallery-section">


<div class="section-title">

<h2>
<?=t('gallery')?>
</h2>

</div>

<div class="fixed-gallery">


<button class="gallery-arrow prev-case">
‹
</button>



<div class="gallery-side">

<div class="gallery-side-images" id="leftImages">


<img>
<img>


</div>

</div>





<div class="gallery-main">


<img id="mainCaseImage">


</div>





<div class="gallery-side">


<div class="gallery-side-images" id="rightImages">


<img>
<img>


</div>


</div>



<button class="gallery-arrow next-case">
›
</button>



</div>


</section>


<section class="location-section">


<div class="location-container">


<div class="map">


<iframe 
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.2292773442277!2d35.89917361353724!3d31.978799105150948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca148adbefc8d%3A0x7ae7dffe654e6345!2zRHIuIE5hZGVlbiBBdHRhcmkgT3J0aG9kb250aWNzICYgRGVudGFsIENsaW5pYyB8INivLiDZhtin2K_ZitmGINi52LfYp9ix2Yog2YTYqtmC2YjZitmFINin2YTYo9iz2YbYp9mGINmI2LfYqCDYp9mE2KPYs9mG2KfZhg!5e1!3m2!1sen!2sjo!4v1783511376776!5m2!1sen!2sjo"
width="600"
height="450"
style="border:0;"
allowfullscreen=""
loading="lazy">
</iframe>


</div>



<div class="location-info">


<h2>
<?=t('location_title')?>
</h2>



<p>
<?=t('phone')?>:
<br>
0796900000
</p>



<p>
<?=t('whatsapp')?>:
<br>

<a href="https://wa.me/962796900000">
0796900000
</a>

</p>



<p>

<?=t('instagram')?>:

<br>

<a href="https://www.instagram.com/drnadeenattari">

@drnadeenattari

</a>


</p>



<h3>
<?=t('working_hours')?>
</h3>


<p>
<?=t('working_time')?>
</p>


</div>


</div>


</section>

<?php include "includes/footer.php"; ?>

<script src="assets/js/main.js"></script>

</body>

</html>