<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("layout/head.php")
?>

<body>
  <a href="category-creat.php"><button class="primary-btn">Add category</button></a>  
    <div class="section padding20 margin-t50">
        <form action="core.php" method="post" id="category_content" enctype="multipart/form-data" class="flex-colomn align-center j-center gap40">
            <input type="hidden" name="cate_content_add" value="1">
            <input type="text" class="padding10" name="category_name" placeholder="Category name" style="width: 60%;background-color:#dddbe1;border:none;border-radius:5px;" required="required">

            <div class="flex-colomn gap10" style="width: 60%;">
                <label for="">Category content</label>
                <textarea name="categorey_content" class="padding10" id="categorey_content" cols="30" rows="10" style="width: 100%;background-color:#dddbe1 !important;border:none;border-radius:5px;" placeholder="Enter the content for category" required="required"></textarea>
            </div>
            <div class="flex-colomn gap10" style="width: 60%;">
                <label for="">Category video</label>
                <input type="file" class="padding10" name="category_video" accept="video/*" id="category_video" style="width: 100%;background-color:#dddbe1;border:none;border-radius:5px;" required="required">
            </div>
            <div class="flex-colomn gap10" style="width: 60%;">
                <label for="">Category image</label>
                <input type="file" class="padding10" name="category_img" accept="image/*" id="category_img" oninput="previewImage('preview',event)" style="width: 100%;background-color:#dddbe1;border:none;border-radius:5px;" required="required">
            </div>
            <img src="" id="preview" alt="" style="width: 200px;height:200px;border-radius:5px;border:1px solid black;display:none;">
            <div class="flex-colomn gap10" style="width: 60%;">
                <label for="">Select category</label>
                <select id="mySelect" class="select padding10" multiple name="in_category[]" style="width: 100%;background-color:#dddbe1 !important;border:none;border-radius:5px;">
                    <?php
                    $ctaegory = $sql->prepare("select * from category");
                    $ctaegory->execute();
                    $ctaegory_result = $ctaegory->get_result();
                    if ($ctaegory_result->num_rows > 0) {
                        while ($data = $ctaegory_result->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $data['id'] ?>"><?php echo $data['cate_name'] ?></option>
                        <?php
                        }
                    } else {
                        ?>
                        <option value="">No data found</option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="flex-colomn gap10" style="width: 60%;">
                <label for="">Select category for show</label>
                <select id="mySelect2" class="select padding10" multiple name="in_category_show[]" style="width: 100%;background-color:#dddbe1 !important;border:none;border-radius:5px;">
                    <?php
                    $ctaegory = $sql->prepare("select * from category");
                    $ctaegory->execute();
                    $ctaegory_result = $ctaegory->get_result();
                    if ($ctaegory_result->num_rows > 0) {
                        while ($data = $ctaegory_result->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $data['id'] ?>"><?php echo $data['cate_name'] ?></option>
                        <?php
                        }
                    } else {
                        ?>
                        <option value="">No data found</option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <button name="cate_add" id="uploadButton" style="width: 50%;background-color:blue;color:white;border:none;border-radius:5px;">Submit</button>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#mySelect').select2();
            $("#mySelect2").select2();
        });
    </script>
    <?php
    include("layout/script.php");
    ?>

</body>

</html>