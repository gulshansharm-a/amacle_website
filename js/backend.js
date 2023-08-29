function previewImage(preview, event) {
    var input = event.target;
    var preview = document.getElementById(preview);
    preview.style.display = "flex";
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function () {
    //   file upload category
    $("#category").on('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this); // Use 'this' instead of '$(this)'
        formData.append('cate_add', '1')
        $.ajax({
            url: 'core.php', // Replace with your server-side file upload URL
            type: 'POST',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            xhr: function () {
                var xhr = new window.XMLHttpRequest();

                xhr.upload.addEventListener('progress', function (e) {
                    if (e.lengthComputable) {
                        var percentage = Math.round((e.loaded / e.total) * 100);
                        $('#uploadButton').text(percentage + '%');
                    }
                }, false);

                return xhr;
            },
            success: function (response) {
                // Handle the response after the file is uploaded
                $('#uploadButton').text('Upload');
                if (response == "success") {
                    alert("upload successfully");
                    $(this).trigger('reset');
                } else {
                    alert(response);
                }
            },
            error: function (xhr, status, error) {
                // Handle any errors during the file upload
                $('#uploadButton').text('Upload');
                console.error(xhr, status, error);
            }
        });
    });

    $('#category_content').submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting normally

        var formData = new FormData(this); // Create a new FormData object from the form
       
        $.ajax({
            url: 'core.php', // The URL where you want to submit the form
            type: 'POST',
            data: formData,
            processData: false, // Prevent jQuery from automatically processing the data
            contentType: false, // Prevent jQuery from automatically setting the content type
            xhr: function () {
                var xhr = new window.XMLHttpRequest();

                xhr.upload.addEventListener('progress', function (e) {
                    if (e.lengthComputable) {
                        var percentage = Math.round((e.loaded / e.total) * 100);
                        $('#uploadButton').text(percentage + '%');
                    }
                }, false);

                return xhr;
            },
            success: function (response) {
                $('#uploadButton').text('upload');
                // Handle the success response
                alert(response);
            },
            error: function (xhr, status, error) {
                // Handle the error
                console.log(xhr.responseText);
            }
        });
    });
});


function cateload(cateid){
    $.ajax({
        url:"cateload.php",
        data:{
            id:cateid,
            load:1,
        },
        type:"get",
        beforeSend:function(){
            console.log('load');
        },
        success:function(data){
            $("#cate_content_data").html(data);
        }
    })
}