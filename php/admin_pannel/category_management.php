<?php
include ('DbConnector.php');


if (isset($_POST['updateCategory'])) {
    $updatedCategoryId = $_POST['category_id'];
    $updatedCategoryName = $_POST['updated_category_name'];

    $updateQuery = "UPDATE category SET C_Name='$updatedCategoryName' WHERE Category_id='$updatedCategoryId'";
    
    $updateResult = mysqli_query($connection, $updateQuery);

    if ($updateResult) {
        echo "Category updated successfully.";
    } else {
        echo "Error updating category: " . mysqli_error($connection);
    }
}


if (isset($_POST['addCategory'])) {
    $newCategoryName = $_POST['new_category_name'];

    $insertQuery = "INSERT INTO category (C_Name) VALUES ('$newCategoryName')";
    $insertResult = mysqli_query($connection, $insertQuery);

    if ($insertResult) {
        echo "Category added successfully.";
    } else {
        echo "Error adding category: " . mysqli_error($connection);
    }
}


if (isset($_POST['deleteCategory'])) {
    $deletedCategoryId = $_POST['category_id'];

    $deleteQuery = "DELETE FROM category WHERE Category_id='$deletedCategoryId'";
    $deleteResult = mysqli_query($connection, $deleteQuery);

    if ($deleteResult) {
        echo "Category deleted successfully.";
    } else {
        echo "Error deleting category: " . mysqli_error($connection);
    }
}

$query = "SELECT * FROM category";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'index.php'; ?>
    <div class="container mt-5" style="justify-content: center;">
    <div class="col-md-9">
        <h2>Manage Categories</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody style="padding-left: 20%;">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['Category_id']; ?></td>
                        <td><?php echo $row['C_Name']; ?></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editCategoryModal<?php echo $row['Category_id']; ?>">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteCategoryModal<?php echo $row['Category_id']; ?>">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <!-- Edit Category Modal -->
                    <div class="modal fade" id="editCategoryModal<?php echo $row['Category_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post">
                                        <input type="hidden" name="category_id" value="<?php echo $row['Category_id']; ?>">
                                        <div class="form-group">
                                            <label for="updated_category_name">Updated Category Name</label>
                                            <input type="text" class="form-control" name="updated_category_name" value="<?php echo $row['C_Name']; ?>" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="updateCategory">Update Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Category Modal -->
                    <div class="modal fade" id="deleteCategoryModal<?php echo $row['Category_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteCategoryModalLabel">Delete Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete the category: <?php echo $row['C_Name']; ?>?
                                </div>
                                <div class="modal-footer">
                                    <form method="post">
                                        <input type="hidden" name="category_id" value="<?php echo $row['Category_id']; ?>">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger" name="deleteCategory">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </tbody>
        </table>
        <h2>Add New Category</h2>
        <form method="post">
            <div class="form-group">
                <label for="new_category_name">Category Name</label>
                <input type="text" class="form-control" name="new_category_name" required>
            </div>
            <button type="submit" class="btn btn-primary" name="addCategory">Add Category</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
