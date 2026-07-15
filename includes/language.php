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
'البورد الأردني في تقويم الأسنان والفكين',

'certificate_3'=>
'درجة دكتور في طب وجراحة الأسنان من الجامعة الأردنية',

'certificate_4'=>
'عضوية الكلية الملكية للجراحين في إيرلندا',

'certificate_5'=>
'تجميل الوجه غير الجراحي',


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


/* Services */

'services_title'=>'خدمات العيادة',

'services_description'=>'نقدم مجموعة متكاملة من خدمات طب الأسنان وتقويم الأسنان بأحدث التقنيات وبأعلى معايير الجودة.',


'orthodontics_desc'=>'تقويم الأسنان للأطفال والبالغين بهدف تحسين ترتيب الأسنان، تصحيح الإطباق، وتحسين تناسق الابتسامة.',


'metal_braces_desc'=>'من أكثر أنواع التقويم استخداماً، ويعتمد على حاصرات معدنية تثبت على الأسنان لتحريكها تدريجياً إلى الوضع الصحيح.',


'clear_aligners_desc'=>'تقويم شفاف يعتمد على قوالب شفافة مصممة خصيصاً لتحريك الأسنان تدريجياً مع الحفاظ على مظهر طبيعي أثناء العلاج.',


'functional_appliances_desc'=>'يستخدم أثناء مراحل النمو عند الأطفال واليافعين للمساعدة في توجيه نمو الفكين وتحسين العلاقة بينهما.',


'retainers_desc'=>'تستخدم بعد إزالة التقويم للحفاظ على ترتيب الأسنان، وقد تكون ثابتة أو متحركة حسب حاجة المريض.',


'cleaning_desc'=>'تنظيف الأسنان الدوري يساعد على إزالة الترسبات والجير، الحفاظ على صحة اللثة، وتقليل مشاكل الأسنان واللثة.',


'whitening_desc'=>'تبييض الأسنان لتحسين لون الأسنان ومنح الابتسامة مظهراً أكثر إشراقاً حسب حالة الأسنان ودرجة التصبغات.',


'veneers_desc'=>'قشور تجميلية رقيقة تستخدم لتحسين شكل الأسنان ولونها وحجمها وإغلاق الفراغات البسيطة للحصول على ابتسامة متناسقة.',


'crowns_desc'=>'تركيبات الأسنان مثل التيجان والجسور تساعد على تعويض الأسنان المتضررة أو المفقودة وتحسين الشكل والوظيفة.',


'implants_desc'=>'حل ثابت لتعويض الأسنان المفقودة من خلال وضع زرعة داخل العظم ثم تركيب السن فوقها لاستعادة الشكل والوظيفة.',


'fillings_desc'=>'حشوات تجميلية لعلاج التسوس أو ترميم الأسنان المتضررة مع الحفاظ على مظهر قريب من لون الأسنان الطبيعي.',


'pediatric_desc'=>'عناية لطيفة ومريحة بأسنان الأطفال تشمل الفحص الدوري، التنظيف، علاج التسوس، والمتابعة الوقائية.',


'facial_aesthetics_desc'=>'خدمات تجميل الوجه غير الجراحي لتحسين تناسق ملامح الوجه بطريقة طبيعية وآمنة بما ينسجم مع الابتسامة.',
/* Location */

'location_title'=>'موقع العيادة',

'phone'=>'رقم الهاتف',

'whatsapp'=>'واتساب',

'instagram'=>'إنستغرام',

'working_hours'=>'ساعات عمل العيادة',

'working_time'=>'السبت إلى الخميس من 10:00 صباحاً إلى 8:00 مساءً',


'clinic_address'=>'شارع حنين بن إسحاق، عمّان',
'working_time'=>'السبت إلى الخميس من 10:00 صباحاً إلى 8:00 مساءً',

/* Footer */

'follow_us'=>'تابعنا على مواقع التواصل الاجتماعي',

'facebook'=>'فيسبوك',

'rights'=>'جميع الحقوق محفوظة لدى عيادة د. نادين عطاري',


'reviews_title'=>'آراء المرضى',

'google_reviews'=>'عرض جميع التقييمات على Google',

'write_review'=>'شاركنا تجربتك',

'footer_description'=>'عيادة متخصصة في تقويم الأسنان وطب الأسنان نقدم رعاية متكاملة بابتسامة صحية وثقة.',

'footer_links'=>'روابط الصفحات',

'follow_us'=>'تابعنا على مواقع التواصل الاجتماعي',

'powered_by'=>'Powered by',

'clinic_owner'=>'الدكتورة نادين عطاري',

'cases'=>'الحالات',

'reviews'=>'التقييمات',

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
'Jordanian Board in Orthodontics and Dentofacial Orthopedics',

'certificate_3'=>
'Doctor of Dental Surgery Degree from the University of Jordan',

'certificate_4'=>
'Membership of the Royal College of Surgeons in Ireland',

'certificate_5'=>
'Certified in Non-Surgical Facial Aesthetics',




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



/* Services */

'services_title'=>'Clinic Services',

'services_description'=>'We provide comprehensive dental and orthodontic services using modern techniques and high-quality care.',


'orthodontics_desc'=>'Orthodontic treatment for children and adults helps improve teeth alignment, correct bite problems, and create a balanced smile.',


'metal_braces_desc'=>'One of the most commonly used orthodontic treatments, using metal brackets to gradually move teeth into the correct position.',


'clear_aligners_desc'=>'A discreet treatment using custom-made clear trays to gradually move teeth while maintaining a natural appearance.',


'functional_appliances_desc'=>'Used during growth stages in children and teenagers to guide jaw development and improve jaw relationship.',


'retainers_desc'=>'Used after orthodontic treatment to maintain the new position of teeth and prevent relapse.',


'cleaning_desc'=>'Professional dental cleaning removes plaque and tartar, maintains gum health, and prevents dental problems.',


'whitening_desc'=>'Teeth whitening improves tooth color and provides a brighter smile based on tooth condition and staining level.',


'veneers_desc'=>'Thin cosmetic shells used to improve tooth shape, color, size, and minor gaps for a natural smile.',


'crowns_desc'=>'Dental crowns and bridges restore damaged or missing teeth and improve appearance and function.',


'implants_desc'=>'A fixed solution for replacing missing teeth by placing an implant inside the bone and restoring the tooth later.',


'fillings_desc'=>'Cosmetic fillings treat cavities and restore damaged teeth while maintaining a natural tooth-colored appearance.',


'pediatric_desc'=>'Gentle dental care for children including check-ups, cleaning, cavity treatment, and preventive follow-up.',


'facial_aesthetics_desc'=>'Non-surgical facial aesthetics services that enhance facial harmony naturally and safely.',

/* Location */

'location_title'=>'Clinic Location',

'phone'=>'Phone',

'whatsapp'=>'WhatsApp',

'instagram'=>'Instagram',

'working_hours'=>'Working Hours',

'working_time'=>'Saturday to Thursday from 10:00 AM to 8:00 PM',

'clinic_address'=>'Hunayn Bin Ishak St, Amman',
'working_time'=>'Saturday to Thursday from 10:00 AM to 8:00 PM',

/* Footer */

'follow_us'=>'Follow us on social media',

'facebook'=>'Facebook',

'rights'=>'All rights reserved to Dr. Nadeen Attari Clinic',

'reviews_title'=>'Patient Reviews',

'google_reviews'=>'View All Reviews on Google',

'write_review'=>'Share Your Experience',

'footer_description'=>'A specialized orthodontic and dental clinic providing comprehensive dental care with healthy confident smiles.',

'footer_links'=>'Quick Links',

'follow_us'=>'Follow Us',

'powered_by'=>'Powered by',

'clinic_owner'=>'Dr. Nadeen Attari',

'cases'=>'Cases',

'reviews'=>'Reviews',

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