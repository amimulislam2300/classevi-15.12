<?php
if (isset($_POST['btn'])) {
    // Get file details
    $filename = $_FILES['my_file']['name'];
    $tmp = $_FILES['my_file']['tmp_name'];
    $img = 'images/';
    $file_size = $_FILES['my_file']['size'];
    $kb = $file_size / 1024;

    // Check if file size is over 200KB
    if ($kb > 200) {
        echo "File size is too large";
    } else {
        // Move file to the "images" directory
        if (move_uploaded_file($tmp, $img . $filename)) {
            echo "File uploaded successfully!";
            // Display image after successful upload
        } else {
            echo "Error uploading file.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="my_file"><br><br>
        <input type="submit" name="btn" value="Upload">
    </form>
    
    <?php 
    
    echo "<img src='" . $img . $filename . "' alt='Uploaded Image' width='300' height='300'>";

    ?>
</body>
</html>


