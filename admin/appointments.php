<?php

require "../config/database.php";


$data=$conn->query(

"SELECT * FROM appointments 
ORDER BY id DESC"

)->fetchAll();


?>


<?php include "layout/sidebar.php"; ?>


<div class="content">


<h1>
الحجوزات
</h1>


<div class="table-box">


<table class="table">


<tr>

<th>
الاسم
</th>

<th>
الهاتف
</th>

<th>
التاريخ
</th>

<th>
الحالة
</th>

</tr>



<?php foreach($data as $row): ?>


<tr>


<td>
<?=$row['name'];?>
</td>


<td>
<?=$row['phone'];?>
</td>


<td>
<?=$row['appointment_date'];?>
</td>


<td>
<?=$row['status'];?>
</td>


</tr>


<?php endforeach;?>


</table>


</div>


</div>