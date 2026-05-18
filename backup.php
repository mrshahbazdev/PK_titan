<?php
// Database configuration
$host = '127.0.0.1';
$dbname = 'tourrada_site';
$username = 'tourrada_site';
$password = '5GuhLaemzvK8XZfKfVD9';

// Backup configuration
$backupDir = '';
$backupFile = $backupDir . $dbname .'.sql';

// Ensure the backup directory exists
if (!is_dir($backupDir)) {
    mkdir($backupDir, 0755, true);
}

// Command to execute mysqldump
$command = "mysqldump --host=$host --user=$username --password=$password $dbname > $backupFile";

// Execute the command
$output = [];
$return_var = NULL;
exec($command, $output, $return_var);

// Check if the backup was successful
if ($return_var !== 0) {
    echo "Backup failed.";
} else {
    echo "Backup successful: " . $backupFile;
    // Provide a link to download the backup file
    echo "<br><a href='download.php?file=" . urlencode($backupFile) . "'>Download Backup</a>";
}
?>
