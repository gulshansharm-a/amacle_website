<?php
include("connection.php");


if (isset($_POST['cate_add'])) {
    $cate_name = $_POST['category_name'];
    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the file was uploaded without errors
        if (isset($_FILES['category_img']) && $_FILES['category_img']['error'] === UPLOAD_ERR_OK) {
            // Specify the directory to save the uploaded file
            $uploadDir = 'uploads/';

            // Generate a unique file name to avoid conflicts
            $filename = uniqid() . '_' . $_FILES['category_img']['name'];

            // Move the uploaded file to the desired directory
            if (move_uploaded_file($_FILES['category_img']['tmp_name'], $uploadDir . $filename)) {
                // File upload successful
                $filepath = $uploadDir . $filename;
                $cate_add = $sql->prepare("INSERT INTO `category`( `cate_name`, `cate_img`) VALUES (?,?)");
                $cate_add->bind_param('ss', $cate_name, $filepath);
                $cate_add->execute();
                if ($cate_add->affected_rows > 0) {
                    echo "success";
                }
            } else {
                // Failed to move the uploaded file
                echo json_encode(['status' => 'error', 'message' => 'Failed to move the uploaded file']);
            }
        } else {
            // File upload error
            echo json_encode(['status' => 'error', 'message' => 'Error uploading the file']);
        }
    } else {
        // Invalid request method
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    }


  
}
if (isset($_POST['cate_content_add'])) {
    $cate_name = $_POST['category_name'];
    $fileuploadimg = "no";
    $fileuploadvideo = "no";
    $imgpath = "";
    $videopath = "";
    $category = implode(',', $_POST['in_category']);
    $cateshow = implode(',', $_POST['in_category_show']);
   
        // Check if the file was uploaded without errors
        if (isset($_FILES['category_img']) && $_FILES['category_img']['error'] === UPLOAD_ERR_OK) {
            // Specify the directory to save the uploaded file
            $uploadDir = 'uploads/';

            // Generate a unique file name to avoid conflicts
            $filename = uniqid() . '_' . $_FILES['category_img']['name'];

            // Move the uploaded file to the desired directory
            if (move_uploaded_file($_FILES['category_img']['tmp_name'], $uploadDir . $filename)) {
                $fileuploadimg = "yes";
                $imgpath = $uploadDir . $filename;
            } else {
                // Failed to move the uploaded file
                echo 'Failed to move the uploaded img';
            }
        } else {
            // File upload error
            echo 'Error uploading the img';
        }
        if (isset($_FILES['category_video']) && $_FILES['category_video']['error'] === UPLOAD_ERR_OK) {
            // Specify the directory to save the uploaded file
            $uploadDir = 'uploads/';

            // Generate a unique file name to avoid conflicts
            $filename = uniqid() . '_' . $_FILES['category_video']['name'];

            // Move the uploaded file to the desired directory
            if (move_uploaded_file($_FILES['category_video']['tmp_name'], $uploadDir . $filename)) {
                $fileuploadvideo = "yes";
                $videopath = $uploadDir . $filename;
            } else {
                // Failed to move the uploaded file
                echo 'Error uploading the video';
            }
        } else {
            // File upload error
            echo 'Error uploading the video';
        }
        if ($fileuploadimg == "yes" && $fileuploadvideo == "yes") {
            $fileupload = $sql->prepare("INSERT INTO `cate_content`( `cate_name`, `content`, `cate_img`, `cate_video`, `category`, `show_category`) VALUES (?,?,?,?,?,?)");
            $fileupload->bind_param('ssssss', $cate_name, $_POST['categorey_content'], $imgpath, $videopath, $category, $cateshow);
            $fileupload->execute();
            if ($fileupload->affected_rows > 0) {
                echo "success";
            } else {
                echo "data saving failed";
            }
        }
   
}


