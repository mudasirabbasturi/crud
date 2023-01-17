<?php
/**
 * Delete Customer Data
 * This file is responsible for deleting customer data from the database.
 * It receives the customer ID from index.php and deletes the corresponding record from the database.
 */
    include_once("config.php");
    // Delete record with specific ID
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM `customers` WHERE id=$id";
        if(mysqli_query($conn,$sql)) {
            ?>
            <script>
              alert('Record is deleted successfully');
              window.location.href= "index.php";
            </script>

        <?php }
        else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
    // Close connection
    mysqli_close($conn);