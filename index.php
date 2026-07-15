<?php

require "includes/language.php";

?>

<!DOCTYPE html>

<html lang="<?=t('lang_code')?>"
dir="<?=t('dir')?>">


<head>

<link rel="stylesheet" href="assets/css/style.css">

<link rel="icon"
href="assets/images/logo.png">

<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description"

content="عيادة د. نادين عطاري لتقويم الأسنان وطب الأسنان في عمان الأردن. خدمات تقويم الأسنان، التجميل، الزراعة، والفينيير.">

<meta name="keywords"

content="تقويم اسنان عمان, د نادين عطاري, طبيبة اسنان عمان, orthodontist jordan">


<meta name="author"

content="Dr Nadine Attari">

<meta name="developer"

content="Ahmad Ghanem">

<meta name="robots"



content="index, follow">



<!-- 444444444444444444444444444444444444 -->

<link rel="canonical"

href="https://.com">

<!-- 444444444444444444444444444444

  -->

  <meta property="og:title"

content="عيادة د. نادين عطاري">


<meta property="og:description"

content="تقويم الأسنان وطب الأسنان في عمان الأردن">

<meta property="og:image"

content="assets/images/logo.png">


<meta property="og:type"

content="website">

<!-- Open Graph Facebook -->

<meta property="og:title"

content="Dr. Nadeen Attari Orthodontic and Dental Clinic">

<meta property="og:description"

content="Orthodontic and dental care clinic in Amman Jordan">

<meta property="og:type"

content="website">



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
href="https://wa.me/+962796978754"
target="_blank">

<?=t('whatsapp')?>

</a>



<a class="btn call"
href="tel:+962796978754">

<?=t('call' )?> +962796978754

</a>




<a class="btn instagram"
href="https://www.instagram.com/drnadeenattari"
target="_blank">

<?=t('instagram')?>

</a>



</div>


</div>

<div class="hero-image">


<div class="doctor-frame">


<img src="assets/images/doctor_hero.png"
alt="Dr Nadeen Attari Orthodontist in Amman Jordan">


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


<section class="services-section" id="services-section">


<div class="section-title">

<h2>
<?=t('services_title')?>
</h2>

<p>
<?=t('services_description')?>
</p>

</div>



<div class="services-grid">


<?php

$services=[

['orthodontics','orthodontics_desc'],

['metal_braces','metal_braces_desc'],

['clear_aligners','clear_aligners_desc'],

['functional_appliances','functional_appliances_desc'],

['retainers','retainers_desc'],

['cleaning','cleaning_desc'],

['whitening','whitening_desc'],

['veneers','veneers_desc'],

['crowns','crowns_desc'],

['implants','implants_desc'],

['fillings','fillings_desc'],

['pediatric','pediatric_desc'],

['facial_aesthetics','facial_aesthetics_desc']

];


foreach($services as $service):

?>


<div class="service-card">

<h3>

<?=t($service[0])?>

</h3>


<p>

<?=t($service[1])?>

</p>


</div>


<?php endforeach; ?>


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


<img loading="Orthodontist">
<img loading="Orthodontist">


</div>

</div>





<div class="gallery-main">


<img id="mainCaseImage">


</div>





<div class="gallery-side">


<div class="gallery-side-images" id="rightImages">


<img loading="Orthodontist">
<img>


</div>


</div>



<button class="gallery-arrow next-case">
›
</button>



</div>


</section>

<section class="location-section" id="location-section">


<div class="location-container">


<div class="location-title">


<span>
<?=t('location_title')?>
</span>


<h2>
<?=t('clinic_name')?>
</h2>





</div>





<div class="location-content">



<div class="map">


<iframe 
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.2292773442277!2d35.89917361353724!3d31.978799105150948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca148adbefc8d%3A0x7ae7dffe654e6345!2zRHIuIE5hZGVlbiBBdHRhcmkgT3J0aG9kb250aWNzICYgRGVudGFsIENsaW5pYyB8INivLiDZhtin2K_ZitmGINi52LfYp9ix2Yog2YTYqtmC2YjZitmFINin2YTYo9iz2YbYp9mGINmI2LfYqCDYp9mE2KPYs9mG2KfZhg!5e1!3m2!1sen!2sjo!4v1783511376776!5m2!1sen!2sjo"
loading="lazy">
</iframe>


</div>



<div class="contact-area">

<p class="address">

📍 <?=t('clinic_address')?>


</p>


<p class="working-hours">

<?=t('working_time')?>

</p>

<div class="contact-buttons">



<a class="contact-btn phone"
href="tel:+962796978754">

+962796978754

</a>




<a class="contact-btn whatsapp"
href="https://wa.me/+962796978754"
target="_blank">

<?=t('whatsapp')?>

</a>




<a class="contact-btn instagram"
href="https://www.instagram.com/drnadeenattari"
target="_blank">

<?=t('instagram')?>

</a>



</div>


</div>



</div>


</div>


</section>

<?php include "includes/footer.php"; ?>

<script src="assets/js/main.js"></script>

<a 
class="floating-whatsapp"
href="https://wa.me/+962796978754"
target="_blank"
aria-label="WhatsApp">

<span>
<i class="fa-brands fa-whatsapp"></i>
</span>

</a>

</body>

</html>