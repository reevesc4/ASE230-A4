<?php
function readCSV($file) {
    $rows = [];
    if (file_exists($file)) {
        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $rows[] = $data;
            }
            fclose($handle);
        }
    } else {
        return "Error: CSV file not found - $file"; // Return error message for debugging
    }
    return $rows;
}
?>
