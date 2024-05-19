<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo'])) {
    $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
    $fileType = $_FILES['photo']['type'];
    $fileName = basename($_FILES['photo']['name']);
    $targetDirectory = "./files/";
    $targetFile = $targetDirectory . uniqid() . "-" . $fileName;
    $fileSize = $_FILES['photo']['size'];

    if (in_array($fileType, $allowedTypes) && $fileSize < 5*1024*1024) {
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
            echo "File uploaded successfully!";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Invalid file type. Only JPEG, PNG, and JPG files are allowed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload - </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>File Upload</h1>
                

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptates aspernatur, ut ipsam eum adipisci asperiores dolores et voluptatum minima?</p>

                <pre>
                    <p>
                        <?php 
                            print_r($_POST);
                            print_r($_FILES);
                        ?>
                    </p>
                </pre>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" enctype="multipart/form-data">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="">

                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo"><br>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>