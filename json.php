<?php
function readJSON($file) {
    if (file_exists($file)) {
        $json_data = file_get_contents($file);
        return json_decode($json_data, true);
    } else {
        return "Error: JSON file not found - $file"; // Return error message for debugging
    }
}
?>
