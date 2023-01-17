<?php
    include 'header.php';
    include_once("add_save.php");
/**
 * Add New Customer Form
 * This file contains the HTML form for adding new customer data to the database.
 * It allows users to input their data and submit it to the server for insertion into the database.
 */
?>
<div class="container mt-5">
    <div class="row border-bottom border-start border-end">
        <div class="col-6 col-md-3">
            <h6><b>Add Record</b></h6>
        </div>
        <div class="col-6 col-md-3">
            <a href="index.php" class="btn btn-primary btn-sm float-end">
                Go Back Home.
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-5">
            <form action="add.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text">First Name</span>
                    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Last Name</span>
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">E-mail</span>
                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Phone</span>
                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Address</span>
                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">City</span>
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Postal Code</span>
                    <input type="text" class="form-control" name="postalCode" placeholder="Postal Code" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Country</span>
                    <input type="text" class="form-control" name="country" placeholder="Country" required>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-md btn-outline-primary">
            </form>
        </div>
    </div>
</div>
</body>
</html>