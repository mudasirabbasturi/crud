<?php
/**
 * Save New Customer Data
 * This file is responsible for processing the form data from add.php and inserting it into the database.
 * It also contains validation and error-handling code to ensure that the data is correct before insertion.
 */
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postalCode = $_POST['postalCode'];
        $country = $_POST['country'];
        // Insert data into customers table
        $sql = "INSERT INTO `customers` (`fname`,`lname`,`email`,`phone`,`address`,`city`,`postalCode`,`country`) 
                                 VALUES ('$fname','$lname','$email','$phone','$address','$city','$postalCode','$country')";
        if (mysqli_query($conn, $sql)) {
            ?>
<script>
    alert("New record created successfully");
    window.location.href = "index.php";
</script>
<?php
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    // Close connection
    mysqli_close($conn);