<?php
// Set headers
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename='ead.ipa'");
// Replace 'your_ipa_file.ipa' with your actual .ipa file name

// Path to your .ipa file
$ipa_file = 'resources/ead.ipa'; 

// Check if the file exists
if (file_exists($ipa_file)) {
    readfile($ipa_file);
} else {
    echo "File not found.";
}
?>
