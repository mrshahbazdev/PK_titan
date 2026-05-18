<?php
if (!isset($_GET['file']) || empty($_GET['file'])) {
    die('File not specified.');
}

$file = urldecode($_GET['file']);

// Check if the file exists
if (!file_exists($file)) {
    die('File not found.');
}

// Set headers to prompt a file download
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));

// Clear output buffer
ob_clean();
flush();

// Read the file and send it to the output buffer
readfile($file);

exit;
?>
