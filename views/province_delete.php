<?php
include_once("../db.php"); // Include the Database class file
include_once("../province.php"); 

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id']; // Retrieve the 'id' from the URL

    
    $db = new Database();
    $province = new Province($db);

    // Call the delete method to delete the province record
    if ($province->delete($id)) {
    //javascript from stackoverflow for pop up message
    echo '<script>
                alert("Record deleted successfully.");
                window.location.href = "province.view.php?msg=Record deleted successfully.";
              </script>';
    } else {
        echo "Failed to delete the record.";
    }
}