<?php


if (isset($_FILES['myFile'])) {

	$lat = $_POST['lat'];

    // Example:
    move_uploaded_file($_FILES['myFile']['tmp_name'], "../uploads/" . $_FILES['myFile']['name']);
    echo 'successful'.$lat;
}
?>