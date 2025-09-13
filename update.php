<?php
if(isset($_POST['update'])){
    $newName = $_POST['name'];
    echo "تم تعديل العنصر إلى: ".$newName;
}
?>
<h2>تعديل عنصر</h2>
<form method="post">
    الاسم الجديد: <input type="text" name="name">
    <input type="submit" name="update" value="تعديل">
</form>
<a href="index.php">العودة للرئيسية</a>
