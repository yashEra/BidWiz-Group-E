<?php
include ('DbConnector.php');

if (isset($_POST['updateSeller'])) {
    $updatedSellerId = $_POST['seller_id'];
    $updatedFirstName = $_POST['updated_first_name'];
    $updatedLastName = $_POST['updated_last_name'];
    $updatedPhoneNumber = $_POST['updated_phone_number'];
    $updatedEmail = $_POST['updated_email'];

    $updateQuery = "UPDATE seller SET Seller_FirstName='$updatedFirstName', Seller_LastName='$updatedLastName', 
                    Seller_PhoneNumber='$updatedPhoneNumber', Seller_email='$updatedEmail' WHERE Seller_id='$updatedSellerId'";
    
    $updateResult = mysqli_query($connection, $updateQuery);

    if ($updateResult) {
        echo "Seller updated successfully.";
    } else {
        echo "Error updating seller: " . mysqli_error($connection);
    }
}

if (isset($_POST['deleteSeller'])) {
    $deletedSellerId = $_POST['seller_id'];

    $deleteQuery = "DELETE FROM seller WHERE Seller_id='$deletedSellerId'";
    
    $deleteResult = mysqli_query($connection, $deleteQuery);

    if ($deleteResult) {
        echo "Seller deleted successfully.";
    } else {
        echo "Error deleting seller: " . mysqli_error($connection);
    }
}

$query = "SELECT * FROM seller";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Sellers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'index.php'; ?>
    <div class="container mt-5">
        <div class="col-md-9">
            <h2 class="mb-4">Manage Sellers</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Seller ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['Seller_id']; ?></td>
                            <td><?php echo $row['Seller_FirstName']; ?></td>
                            <td><?php echo $row['Seller_LastName']; ?></td>
                            <td><?php echo $row['Seller_PhoneNumber']; ?></td>
                            <td><?php echo $row['Seller_email']; ?></td>
                            <td style="display:flex;">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?php echo $row['Seller_id']; ?>" style="margin-right: 15px;">
                                    Edit
                                </button>
                                <form method="post" class="d-inline">
                                    <input type="hidden" name="seller_id" value="<?php echo $row['Seller_id']; ?>">
                                    <button type="submit" class="btn btn-danger" name="deleteSeller" onclick="return confirm('Are you sure you want to delete this seller?')">Delete</button>
                                </form>
                            </td>
                        </tr>

                        <div class="modal fade" id="editModal<?php echo $row['Seller_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Seller Information</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            <input type="hidden" name="seller_id" value="<?php echo $row['Seller_id']; ?>">
                                            <div class="form-group">
                                                <label for="updated_first_name">First Name</label>
                                                <input type="text" class="form-control" name="updated_first_name" value="<?php echo $row['Seller_FirstName']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="updated_last_name">Last Name</label>
                                                <input type="text" class="form-control" name="updated_last_name" value="<?php echo $row['Seller_LastName']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="updated_phone_number">Phone Number</label>
                                                <input type="text" class="form-control" name="updated_phone_number" value="<?php echo $row['Seller_PhoneNumber']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="updated_email">Email</label>
                                                <input type="email" class="form-control" name="updated_email" value="<?php echo $row['Seller_email']; ?>">
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="updateSeller">Update Seller</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
