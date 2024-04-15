<!doctype html>
<html lang="en">

<?php
// NavBar
include 'navbar.php';

# Open database connection.
require('connect_db.php');
?>

<h1>Delete Items</h1>

<br>

<style>
    form {
        margin-left: 50px;
    }
</style>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['item_id'])) {
        $id = mysqli_real_escape_string($link, $_POST['item_id']);
        $sql = "DELETE FROM products WHERE item_id='$id'";
        if ($link->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">Record deleted successfully.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error deleting record: ' . $link->error . '</div>';
        }
    }
}

$q = "SELECT * FROM products;";
$r = @mysqli_query($link, $q);
if (mysqli_num_rows($r) != 0) {
    echo '
<table class="table">
<thead>
<tr><th>Item ID</th><th>Item Name</th><th>Description</th><th>Image</th><th>Price</th><th>Action</th></tr></thead><tbody>';

    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<tr>
<td>' . $row['item_id'] . ' </td><td>' . $row['item_name'] . ' </td><td>' . $row['item_desc'] . '</td><td><img src="' . $row['item_img'] . '" alt="product" width="50"   height="50"></td><td>£' . $row['item_price'] . '</td>
<td>
    <form method="post" action="delete.php">
        <input type="hidden" name="item_id" value="' . $row['item_id'] . '">
        <button type="submit" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this item?\')">Delete</button>
    </form>
</td>
</tr>';
    }

    echo '</tbody></table></br><br><a href="create.php">Add Records</a>  |  <a href="read.php">Read Records</a>  |  <a href="update.php">Update Record</a>  | <a href="delete.php">Delete Record</a>';
} else {
    echo '<div class="alert alert-info" role="alert">No records found!</div>';
}

mysqli_close($link);
?>

</html>