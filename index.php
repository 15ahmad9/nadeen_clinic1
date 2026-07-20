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

<i class="fa-brands fa-whatsapp"></i> <?=t('whatsapp')?>

</a>



<a class="btn call"
href="tel:+962796978754">

<i class="fa-solid fa-phone"></i> <?=t('call' )?> +962796978754

</a>




<a class="btn instagram"
href="https://www.instagram.com/drnadeenattari"
target="_blank">

<i class="fa-brands fa-instagram"></i> <?=t('instagram')?>

</a>



</div>


</div>

<div class="hero-image">


<div class="doctor-frame">


<img src="assets/images/doctor_hero.png"
alt="Dr Nadeen Attari Orthodontist in Amman Jordan">


<div class="doctor-name-card">

<h3>
<?=t('doctor_badge_name')?>
</h3>


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


<span><i class="fa-solid fa-circle-check"></i> <?=t('certificate_1')?></span>


<span><i class="fa-solid fa-circle-check"></i> <?=t('certificate_2')?></span>


<span><i class="fa-solid fa-circle-check"></i> <?=t('certificate_3')?></span>


<span><i class="fa-solid fa-circle-check"></i> <?=t('certificate_4')?></span>

<span><i class="fa-solid fa-circle-check"></i> <?=t('certificate_5')?></span>

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
$serviceIcons = [
    'shield' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 5.5 5.7v5.1c0 4.2 2.7 8 6.5 9.2 3.8-1.2 6.5-5 6.5-9.2V5.7L12 3Z"/><path d="M9.2 10.2c.8-.8 1.8-1.2 2.8-1.2s2 .4 2.8 1.2"/></svg>',
    'wand' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="m15 4 5 5L9 20H4v-5L15 4Z"/><path d="m13 6 5 5"/><path d="M5 4v3M3.5 5.5h3M19 15v3M17.5 16.5h3"/></svg>',
    'drop' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3s6 6.5 6 11a6 6 0 0 1-12 0c0-4.5 6-11 6-11Z"/></svg>',
    'smile' => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="8"/><path d="M9 10h.01M15 10h.01M8.5 14c1 1.3 2.1 2 3.5 2s2.5-.7 3.5-2"/></svg>',
    'crown' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 7 4 4 4-6 4 6 4-4-2 10H6L4 7Z"/><path d="M6 20h12"/></svg>',
    'implant' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3v18M8 6h8M9 10h6M10 14h4M9 18h6"/><path d="m10 3 2-2 2 2"/></svg>',
    'pulse' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 12h4l2-7 4 14 2-7h6"/></svg>',
    'sliders' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3v6M6 13v8M12 3v10M12 17v4M18 3v3M18 10v11"/><path d="M4 9h4M10 13h4M16 6h4M16 10h4"/></svg>',
    'anchor' => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="5" r="2"/><path d="M12 7v12M5 12H2c0 5 4.5 9 10 9s10-4 10-9h-3M8 12h8"/></svg>'
];
?>

<!-- Main Orthodontics Card -->

<div class="service-card orthodontics-main">

<div class="service-icon tone-rose" aria-hidden="true">
<?= $serviceIcons['shield'] ?>
</div>

<h3>
<?=t('orthodontics')?>
</h3>


<p>
<?=t('orthodontics_desc')?>
</p>


<div class="orthodontics-types">


<div>
<h4>
<?=t('metal_braces')?>
</h4>

<p>
<?=t('metal_braces_desc')?>
</p>
</div>



<div>
<h4>
<?=t('clear_aligners')?>
</h4>

<p>
<?=t('clear_aligners_desc')?>
</p>
</div>



<div>
<h4>
<?=t('functional_appliances')?>
</h4>

<p>
<?=t('functional_appliances_desc')?>
</p>
</div>



</div>


</div>




<?php

$services=[

['cleaning','cleaning_desc','wand','tone-fuchsia'],

['whitening','whitening_desc','drop','tone-indigo'],

['veneers','veneers_desc','smile','tone-purple'],

['crowns','crowns_desc','crown','tone-orange'],

['implants','implants_desc','implant','tone-cyan'],

['fillings','fillings_desc','pulse','tone-green'],

['pediatric','pediatric_desc','smile','tone-blue'],

['facial_aesthetics','facial_aesthetics_desc','sliders','tone-teal']

];


foreach($services as $service):

?>


<div class="service-card">

<div class="service-icon <?=$service[3]?>" aria-hidden="true">
<?=$serviceIcons[$service[2]]?>
</div>

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


<h2>
<?=t('location_title')?>
</h2>


<span>
<?=t('clinic_name')?>
</span>





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


<!-- <p class="working-hours">

<?=t('working_time')?>

</p> -->

<div class="contact-buttons">



<a class="contact-btn phone"
href="tel:+962796978754"
aria-label="<?=t('call')?>">

<i class="fa-solid fa-phone" aria-hidden="true"></i>
<span>+962796978754</span>

</a>




<a class="contact-btn whatsapp"
href="https://wa.me/+962796978754"
target="_blank"
rel="noopener noreferrer"
aria-label="<?=t('whatsapp')?>">

<i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
<span><?=t('whatsapp')?></span>

</a>




<a class="contact-btn instagram"
href="https://www.instagram.com/drnadeenattari"
target="_blank"
rel="noopener noreferrer"
aria-label="<?=t('instagram')?>">

<i class="fa-brands fa-instagram" aria-hidden="true"></i>
<span><?=t('instagram')?></span>

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