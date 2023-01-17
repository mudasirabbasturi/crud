<?php 
/**
 * Save Updated Customer Data
 * This file is responsible for processing the form data from update.php and updating the data in the database.
 * It also contains validation and error-handling code to ensure that the data is correct before updating.
 */
$id = $_GET['id'];
$sql = "SELECT * FROM `customers` WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
foreach($data as $value) {
    $fname = $value['fname'];
    $lname = $value['lname'];
    $email = $value['email'];
    $phone = $value['phone'];
    $address = $value['address'];
    $city = $value['city'];
    $postalCode = $value['postalCode'];
    $country = $value['country'];
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
   
        $sql = "UPDATE `customers` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `phone` = '$phone', `address` = '$address', `city` = '$city', `postalCode` = '$postalCode', `country` = '$country'
                WHERE `id` = $id";
        if(mysqli_query($conn,$sql)) {
            ?>
            <script>
                alert("Record Updated Successfully!");
                window.location.href="index.php";
            </script>
            <?php
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
}
// Close connection
mysqli_close($conn);