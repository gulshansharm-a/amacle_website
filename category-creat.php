<!DOCTYPE html>
<html lang="en">
<?php
include("layout/head.php")
?>

<body>
<a href="cate-content-add.php"><button class="primary-btn">Add category content</button></a>  
    <div class="section padding20 margin-t110">
        <form action="core.php" method="post" id="category" enctype="multipart/form-data" class="flex-colomn align-center j-center gap40">
            <input type="text" class="padding10" name="category_name" placeholder="Category name" style="width: 60%;background-color:#dddbe1;border:none;border-radius:5px;" required="required">
            <input type="file" class="padding10" name="category_img" id="category_img" oninput="previewImage('preview',event)"  style="width: 60%;background-color:#dddbe1;border:none;border-radius:5px;" required="required">
            <img src="" id="preview" alt="" style="width: 200px;height:200px;border-radius:5px;border:1px solid black;display:none;">
            <button name="cate_add" id="uploadButton" style="width: 50%;background-color:blue;color:white;border:none;border-radius:5px;">Submit</button>
        </form>
    </div>
    <?php
    include("layout/script.php");
    ?>
</body>

</html>