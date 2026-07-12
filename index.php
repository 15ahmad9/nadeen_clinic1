<?php
require "config/database.php";
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
عيادة د. نادين عطاري | تقويم الأسنان وطب الأسنان
</title>


<!-- Bootstrap -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<!-- Google Font -->

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700;800&display=swap" rel="stylesheet">


<!-- CSS -->

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>


<body>


<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg fixed-top">

<div class="container">


<a class="navbar-brand" href="index.php">

<img src="assets/images/nadeen_log.jpeg">

</a>



<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarMenu">

<span class="navbar-toggler-icon"></span>

</button>



<div class="collapse navbar-collapse"
id="navbarMenu">


<ul class="navbar-nav mx-auto">


<li class="nav-item">
<a href="#home" class="nav-link">
الرئيسية
</a>
</li>


<li>
<a href="#about" class="nav-link">
عن الدكتورة
</a>
</li>


<li>
<a href="#services" class="nav-link">
الخدمات
</a>
</li>


<li>
<a href="gallery.php" class="nav-link">
الحالات
</a>
</li>


<li>
<a href="reviews.php" class="nav-link">
التقييمات
</a>
</li>


<li>
<a href="#location" class="nav-link">
موقع العيادة
</a>
</li>



</ul>



<a href="#booking"
class="appointment-btn">

احجز موعد

</a>



</div>


</div>


</nav>

<!-- ================= HERO ================= -->


<section class="hero">


<div class="container">


<div class="row align-items-center">


<div class="col-lg-6">


<h1>

عيادة د. نادين عطاري

</h1>


<h3>

لتقويم الأسنان وطب الأسنان

</h3>



<p>


أهلاً وسهلاً بكم في عيادة د. نادين عطاري
لتقويم الأسنان وطب الأسنان في عمّان، الأردن.

نؤمن أن الابتسامة الصحية والجميلة تبدأ من
رعاية دقيقة، تعامل لطيف، وخطة علاجية
تناسب كل مريض حسب احتياجاته.


</p>




<div class="hero-buttons">


<a href="https://wa.me/962796900000"
class="btn btn-primary">

واتساب

</a>



<a href="tel:0796900000"
class="btn btn-dark">

اتصال

</a>



<a href="https://www.instagram.com/dr"
class="btn btn-outline-dark">

انستغرام

</a>



</div>


</div>




<div class="col-lg-6 text-center">


<img src="assets/images/doctor.png"
class="img-fluid doctor-image">


</div>


</div>


</div>


</section>





<!-- ================= ABOUT ================= -->



<section id="about"
class="section">


<div class="container">


<div class="row align-items-center">


<div class="col-lg-5">


<img src="assets/images/about-doctor.jpg"
class="img-fluid rounded">


</div>



<div class="col-lg-7">


<h2>
عن الدكتورة نادين عطاري
</h2>


<p>


الدكتورة نادين عطاري أخصائية تقويم أسنان
في عمّان، الأردن، متخصصة في تقويم الأسنان،
تصحيح الإطباق، وتحسين تناسق الابتسامة
للأطفال والبالغين.


</p>


<p>


حصلت على درجة الماجستير في تقويم الأسنان
والفكين من الجامعة الأردنية، وهي حاصلة على
البورد الأردني في تقويم الأسنان وعضوية
الكلية الملكية للجراحين في إيرلندا.


</p>



<p>


كما أنها حاصلة على شهادة في تجميل الوجه
غير الجراحي، مما يساعدها على تقديم رعاية
تجمع بين صحة الأسنان وجمال الابتسامة
وتناسق ملامح الوجه.


</p>



</div>


</div>


</div>


</section>


<!-- ================= CERTIFICATES ================= -->


<section class="section certificates">


<div class="container">


<h2>

الشهادات والخبرات

</h2>



<div class="row g-4">



<div class="col-lg-3 col-md-6">


<div class="certificate-card">


<img src="assets/images/certificates/master.jpg">


<h5>

ماجستير تقويم الأسنان والفكين

</h5>


<p>

الجامعة الأردنية

</p>


</div>


</div>





<div class="col-lg-3 col-md-6">


<div class="certificate-card">


<img src="assets/images/certificates/jordan-board.jpg">


<h5>

البورد الأردني في تقويم الأسنان

</h5>


<p>

Jordanian Board

</p>


</div>


</div>





<div class="col-lg-3 col-md-6">


<div class="certificate-card">


<img src="assets/images/certificates/rcs.jpg">


<h5>

عضوية الكلية الملكية للجراحين

</h5>


<p>

Royal College of Surgeons Ireland

</p>


</div>


</div>





<div class="col-lg-3 col-md-6">


<div class="certificate-card">


<img src="assets/images/certificates/facial.jpg">


<h5>

شهادة تجميل الوجه غير الجراحي

</h5>


<p>

Facial Aesthetics

</p>


</div>


</div>



</div>


</div>


</section>



<!-- ================= SERVICES ================= -->


<section id="services"
class="section bg-light">


<div class="container">


<h2 class="text-center">

خدمات العيادة

</h2>


<div class="row mt-5">



<?php

$services=[


"تقويم الأسنان",

"التقويم المعدني",

"التقويم الشفاف",

"التقويم الوظيفي",

"تنظيف الأسنان والعناية باللثة",

"تبييض الأسنان",

"الفينيير",

"تركيبات الأسنان",

"زراعة الأسنان",

"الحشوات التجميلية",

"علاج أسنان الأطفال",

"تجميل الوجه غير الجراحي"


];



foreach($services as $service)

{


echo '

<div class="col-lg-4 col-md-6 mb-4">

<div class="service-card">

<h4>'.$service.'</h4>

<p>
نقدم هذا العلاج بأحدث الطرق الطبية
وبخبرة متخصصة للحصول على أفضل النتائج.
</p>

</div>

</div>

';

}


?>


</div>


</div>


</section>


<!-- ================= CASES GALLERY ================= -->

<section class="section cases-section">

<div class="container">


<h2>
حالات تم علاجها
</h2>


<div class="swiper cases-coverflow">


<div class="swiper-wrapper">


<?php

$stmt = $conn->query(
"SELECT * FROM gallery ORDER BY id DESC"
);


while($case = $stmt->fetch()){


?>


<div class="swiper-slide">


<img src="uploads/cases/<?php echo $case['image']; ?>">


</div>


<?php } ?>


</div>


<!-- الأسهم -->

<div class="swiper-button-next"></div>

<div class="swiper-button-prev"></div>


</div>


</div>

</section>

<!-- ================= LOCATION ================= -->


<section id="location"
class="section">


<div class="container">


<h2 class="text-center">
موقع العيادة
</h2>


<div class="map mt-4">


<iframe
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.2292773442277!2d35.89917361353724!3d31.978799105150948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca148adbefc8d%3A0x7ae7dffe654e6345!2zRHIuIE5hZGVlbiBBdHRhcmkgT3J0aG9kb250aWNzICYgRGVudGFsIENsaW5pYyB8INivLiDZhtin2K_ZitmGINi52LfYp9ix2Yog2YTYqtmC2YjZitmFINin2YTYo9iz2YbYp9mGINmI2LfYqCDYp9mE2KPYs9mG2KfZhg!5e1!3m2!1sen!2sjo!4v1783511376776!5m2!1sen!2sjo" 
width="100%"
height="450"
style="border:0;"
loading="lazy">

</iframe>


</div>



<div class="text-center mt-4">


<p>
☎ 0796900000
</p>


<p>
السبت - الخميس
<br>
10:00 AM - 8:00 PM
</p>


</div>



</div>


</section>







<!-- ================= FOOTER ================= -->

<footer>


<div class="container text-center">


<img src="assets/images/logo.png"
width="80">


<h4>
عيادة د. نادين عطاري
</h4>


<p>
تابعنا على مواقع التواصل الاجتماعي
</p>



<a href="#">
Instagram
</a>

|

<a href="#">
Facebook
</a>

|

<a href="#">
WhatsApp
</a>



</div>


</footer>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="assets/js/main.js"></script>

<a href="https://wa.me/962796900000"
class="floating-whatsapp">


<img src="assets/images/icons/whatsapp.svg">

</a>
</body>

</html>