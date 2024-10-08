<?php
function readPlainText($file) {
    if (file_exists($file)) {
        return file_get_contents($file);
    } else {
        return "Error: File not found - $file"; // Return error message for debugging
    }
}
?>
