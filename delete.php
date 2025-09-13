<?php
if(isset($_POST['delete'])){
    echo "تم حذف العنصر.";
}
?>
<h2>حذف عنصر</h2>
<form method="post">
    <input type="submit" name="delete" value="حذف">
</form>
<a href="index.php">العودة للرئيسية</a>
