<?php 

if(isset($_FILES['image'])){
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';

$fileName =  $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$tmpName = $_FILES['image']['tmp_name'];
$fileSize = $_FILES['image']['size'];

    if(move_uploaded_file( $tmpName, '../Files/upload-images/' . $fileName )) {
        echo 'File uploaded Successfully';
    } else {
        echo 'File uploaded corrupted';
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILE - File Upload</title>
</head>
<body>
    
    <div>
        <div>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="image" id=""><br />
                <input type="submit">
            </form>
        </div>
    </div>

</body>
</html>