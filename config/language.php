<?php


session_start();



if(isset($_GET['lang'])){


$_SESSION['lang']=$_GET['lang'];


}



$langCode=$_SESSION['lang'] ?? 'ar';



if($langCode=="en"){


require "languages/en.php";


}else{


require "languages/ar.php";


}


?>