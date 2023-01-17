<?php 
include_once("header.php"); 
/**
 * Customer Data Table
 * This is the main page of the CRUD application, where all the customer data is displayed in a table format. 
 * It retrieves data from the customers table in the database and displays it in a table format.
 * It also provides options to add, edit and delete customer records.
 */
?>
    <div class="container mt-5">
        <div class="row border-bottom border-start border-end">
            <div class="col-12 col-md-6">
                <h6><b>Crud Operation With PHP And MySql.</b></h6>
            </div>
            <div class="col-12 col-md-6">
                <a href="add.php" class="btn btn-primary btn-sm float-md-end">Add New Record.</a>
            </div>
        </div>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Edit/Del</th>
                </tr>
            </thead>
            <tbody>
<?php
// Select all data from customers table
$sql = "SELECT * FROM `customers`";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)) {
    while($row = mysqli_fetch_assoc($result)) {
        ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["fname"]; ?></td>
                            <td><?php echo $row["lname"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["address"]; ?></td>
                            <td><?php echo $row["city"]; ?></td>
                            <td><?php echo $row["postalCode"]; ?></td>
                            <td><?php echo $row["country"]; ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row["id"]; ?>">
                                <i class="fa fa-edit text-dark"></i>
                                </a> /
                                <a href="delete.php?id=<?php echo $row["id"]; ?>">
                                <i class="fa fa-trash text-dark"></i>
                                </a> 
                            </td>
                        </tr>
        <?php }
        // Close connection
        mysqli_close($conn);
}
else {echo "no record found pleasa add record";}
?>
            </tbody>
    </table>
</div>
</body>
</html>