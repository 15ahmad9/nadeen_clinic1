<?php

require_once "../includes/language.php";

?>


<header class="admin-header">


<div class="admin-title">

<h2>

<?=t('admin_panel')?>

</h2>

</div>




<div class="admin-actions">


<a class="lang-btn"
href="<?=switch_lang_url($lang=='ar'?'en':'ar')?>">

<?=t('language')?>

</a>


</div>


</header>