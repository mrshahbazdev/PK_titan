<?php
// URL of the ZIP file
$url = 'https://backendadmin.website/assets/assets/uploads/img/img.zip';

// Path where you want to save the ZIP file
$path = 'img.zip';

// Download the file
$file_contents = file_get_contents($url);

// Check if the download was successful
if ($file_contents === FALSE) {
    die('Error downloading the file');
}

// Save the file to the specified path
file_put_contents($path, $file_contents);
echo 'File downloaded and saved successfully.';
?>
