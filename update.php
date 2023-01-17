<?php
/**
 * Update Customer Form
 * This file contains the HTML form for updating existing customer data in the database.
 * It allows users to edit existing customer data and submit it to the server for updating in the database.
 */
    include 'header.php';
    include_once("update_save.php");
?>
<div class="container mt-5">
    <div class="row border-bottom border-start border-end">
        <div class="col-6 col-md-3">
            <h6><b>Update Record</b></h6>
        </div>
        <div class="col-6 col-md-3">
            <a href="index.php" class="btn btn-primary btn-sm float-end">Go Back Home.</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-5">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text">First Name</span>
                    <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Last Name</span>
                    <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">E-mail</span>
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Phone</span>
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Address</span>
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">City</span>
                    <input type="text" class="form-control" name="city" value="<?php echo $city; ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Postal Code</span>
                    <input type="text" class="form-control" name="postalCode" value="<?php echo $postalCode; ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Country</span>
                    <input type="text" class="form-control" name="country" value="<?php echo $country; ?>">
                </div>
                <input type="submit" name="submit" value="update" class="btn btn-md btn-outline-primary">
            </form>
        </div>
    </div>
</div>
</body>

</html>