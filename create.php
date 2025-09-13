<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    echo "تمت إضافة: ".$name;
}
?>
<h2>إضافة عنصر جديد</h2>
<form method="post">
    الاسم: <input type="text" name="name">
    <input type="submit" name="submit" value="إضافة">
</form>
<a href="index.php">العودة للرئيسية</a>
