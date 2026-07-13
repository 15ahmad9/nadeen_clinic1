<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$allowedLangs = ['ar','en'];

if(isset($_GET['lang']) && in_array($_GET['lang'], $allowedLangs,true)){
    $_SESSION['site_lang'] = $_GET['lang'];
}

$lang = $_SESSION['site_lang'] ?? 'ar';


$translations = [

'ar'=>[

'dir'=>'rtl',
'lang_code'=>'ar',


/* General */

'clinic_name'=>'عيادة الدكتورة نادين عطاري لتقويم الأسنان وطب الأسنان',

'home'=>'الرئيسية',
'about'=>'عن الدكتورة',
'services'=>'الخدمات',
'gallery'=>'الحالات',
'reviews'=>'التقييمات',
'certificates'=>'الشهادات',
'location'=>'موقع العيادة',
'contact'=>'تواصل معنا',
'booking'=>'احجز موعد',


/* Hero */

'hero_title'=>'ابتسامة صحية تبدأ برعاية متخصصة',

'hero_description'=>
'أهلًا وسهلًا بكم في عيادة د. نادين عطاري لتقويم الأسنان وطب الأسنان في عمّان، الأردن.
نقدّم رعاية متخصصة في تقويم الأسنان، وتجميل الابتسامة، إلى جانب مجموعة متكاملة من علاجات الأسنان مثل التنظيف، التبييض، التركيبات، الفينيير، زراعة الأسنان، وعلاج أسنان الأطفال.

كما نوفر خدمات التجميل الوجهي غير الجراحي لتعزيز جمال وتناسق الملامح بطريقة طبيعية وآمنة. هدفنا تقديم تجربة علاجية مريحة وواضحة مبنية على الثقة، للحصول على ابتسامة صحية وجميلة.',


'whatsapp'=>'واتساب',

'call'=>'اتصال',

'instagram'=>'إنستغرام',



/* About */

'welcome_title'=>'أهلاً وسهلاً بكم في عيادة د. نادين عطاري',

'welcome_description'=>
'في عيادتنا نؤمن أن الابتسامة الصحية والجميلة تبدأ من رعاية دقيقة، تعامل لطيف، وخطة علاجية تناسب كل مريض حسب احتياجاته.',


'about_title'=>'عن الدكتورة نادين عطاري',

'about_description'=>
'الدكتورة نادين عطاري أخصائية تقويم أسنان في عمّان، الأردن، متخصصة في تقويم الأسنان، تصحيح الإطباق، وتحسين تناسق الابتسامة للأطفال والبالغين.',

'doctor_name'=>'الدكتورة نادين عطاري',

'doctor_specialty'=>'أخصائية تقويم الأسنان والفكين',

// 'about_description_2'=>
// 'حاصلة على درجة الماجستير في تقويم الأسنان والفكين من الجامعة الأردنية، والبورد الأردني في تقويم الأسنان وعضوية الكلية الملكية للجراحين في إيرلندا.',


'about_description_3'=>
'تقدم علاجاً متكاملاً يجمع بين صحة الأسنان، جمال الابتسامة، وتناسق ملامح الوجه بطريقة طبيعية وآمنة.',


/* Certificates */

'certificates_title'=>'الشهادات والمؤهلات',

'certificate_1'=>
'درجة الماجستير في تقويم الأسنان والفكين من الجامعة الأردنية',

'certificate_2'=>
'البورد الأردني في تقويم الأسنان',

'certificate_3'=>
'درجة دكتور في طب وجراحة الأسنان من الجامعة الأردنية',

'certificate_4'=>
'عضوية الكلية الملكية للجراحين في إيرلندا',

'certificate_5'=>
'تجميل الوجه غير الجراحي',


/* Services */

'services_title'=>'خدمات العيادة',

'orthodontics'=>'تقويم الأسنان',

'metal_braces'=>'التقويم المعدني',

'clear_aligners'=>'التقويم الشفاف',

'functional_appliances'=>'التقويم الوظيفي',

'retainers'=>'المثبتات بعد التقويم',

'cleaning'=>'تنظيف الأسنان والعناية باللثة',

'whitening'=>'تبييض الأسنان',

'veneers'=>'الفينيير',

'crowns'=>'تركيبات الأسنان',

'implants'=>'زراعة الأسنان',

'fillings'=>'حشوات الأسنان التجميلية',

'pediatric'=>'علاج أسنان الأطفال',

'facial_aesthetics'=>'تجميل الوجه غير الجراحي',


/* Location */

'location_title'=>'موقع العيادة',

'phone'=>'رقم الهاتف',

'whatsapp'=>'واتساب',

'instagram'=>'إنستغرام',

'working_hours'=>'ساعات عمل العيادة',

'working_time'=>'السبت إلى الخميس من 10:00 صباحاً إلى 8:00 مساءً',


/* Footer */

'follow_us'=>'تابعنا على مواقع التواصل الاجتماعي',

'facebook'=>'فيسبوك',

'rights'=>'جميع الحقوق محفوظة لدى عيادة د. نادين عطاري',


'reviews_title'=>'آراء المرضى',

'google_reviews'=>'عرض جميع التقييمات على Google',

'write_review'=>'شاركنا تجربتك',


'language'=>'English'

],



'en'=>[

'dir'=>'ltr',
'lang_code'=>'en',


/* General */

'clinic_name'=>'Dr. Nadeen Attari Orthodontic and Dental Clinic',

'home'=>'Home',
'about'=>'About Dr. Nadeen',
'services'=>'Services',
'gallery'=>'Cases',
'reviews'=>'Reviews',
'certificates'=>'Certificates',
'location'=>'Clinic Location',
'contact'=>'Contact Us',
'booking'=>'Book Appointment',



/* Hero */

'hero_title'=>'A Healthy Smile Starts With Expert Care',

'hero_description'=>
'Welcome to Dr. Nadeen Attari Orthodontic and Dental Clinic in Amman, Jordan.
We provide specialized orthodontic care and comprehensive dental treatments, including cleaning, whitening, veneers, implants, children’s dentistry, and cosmetic care.

Our clinic also offers non-surgical facial aesthetics to enhance natural facial balance. We are committed to providing a comfortable, professional experience built on trust.',


'whatsapp'=>'WhatsApp',

'call'=>'Call',

'instagram'=>'Instagram',



/* About */

'welcome_title'=>'Welcome to Dr. Nadeen Attari Orthodontic and Dental Clinic',

'welcome_description'=>
'We believe that a healthy and confident smile starts with precise care, gentle treatment, and a personalized plan designed for every patient.',


'about_title'=>'About Dr. Nadeen Attari',

'about_description'=>
'Dr. Nadeen Attari is a specialist orthodontist in Amman, Jordan, focused on orthodontic treatment, bite correction, and improving smile harmony for children and adults.',

'doctor_name'=>'Dr. Nadeen Attari',

'doctor_specialty'=>'Specialist Orthodontist',

// 'about_description_2'=>
// 'She holds a Master’s degree in Orthodontics and Dentofacial Orthopedics from the University of Jordan, Jordanian Board in Orthodontics, and membership of the Royal College of Surgeons in Ireland.',


'about_description_3'=>
'Providing comprehensive care combining oral health, smile aesthetics, and facial harmony in a natural and safe way.',


/* Certificates */

'certificates_title'=>'Certificates & Qualifications',

'certificate_1'=>
'Master’s Degree in Orthodontics and Dentofacial Orthopedics from the University of Jordan',

'certificate_2'=>
'Jordanian Board in Orthodontics',

'certificate_3'=>
'Doctor of Dental Surgery Degree from the University of Jordan',

'certificate_4'=>
'Membership of the Royal College of Surgeons in Ireland',

'certificate_5'=>
'Certified in Non-Surgical Facial Aesthetics',


/* Services */

'services_title'=>'Clinic Services',

'orthodontics'=>'Orthodontics',

'metal_braces'=>'Metal Braces',

'clear_aligners'=>'Clear Aligners',

'functional_appliances'=>'Functional Appliances',

'retainers'=>'Retainers After Braces',

'cleaning'=>'Professional Dental Cleaning and Gum Care',

'whitening'=>'Teeth Whitening',

'veneers'=>'Veneers',

'crowns'=>'Dental Crowns and Bridges',

'implants'=>'Dental Implants',

'fillings'=>'Cosmetic Dental Fillings',

'pediatric'=>'Pediatric Dentistry',

'facial_aesthetics'=>'Non-Surgical Facial Aesthetics',

/* Location */

'location_title'=>'Clinic Location',

'phone'=>'Phone',

'whatsapp'=>'WhatsApp',

'instagram'=>'Instagram',

'working_hours'=>'Working Hours',

'working_time'=>'Saturday to Thursday from 10:00 AM to 8:00 PM',


/* Footer */

'follow_us'=>'Follow us on social media',

'facebook'=>'Facebook',

'rights'=>'All rights reserved to Dr. Nadeen Attari Clinic',

'reviews_title'=>'Patient Reviews',

'google_reviews'=>'View All Reviews on Google',

'write_review'=>'Share Your Experience',

'language'=>'العربية'

]

];



function t($key){

    global $translations,$lang;

    return $translations[$lang][$key] ?? $key;

}



function switch_lang_url($targetLang){

    $params=$_GET;

    $params['lang']=$targetLang;

    $query=http_build_query($params);

    $path=strtok($_SERVER["REQUEST_URI"],'?');

    return $path.'?'.$query;

}

?>