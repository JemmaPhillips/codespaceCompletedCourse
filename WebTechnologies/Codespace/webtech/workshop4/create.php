<!doctype html>
<html lang="en">

<?php 
// NavBar
include 'navbar.php';


if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php'); 

# Initialize an error array.
$errors = array();

# Check for item name .
if ( empty( $_POST[ 'item_name' ] ) )
{ $errors[] = 'Enter the item name.' ; }
else
{ $n = mysqli_real_escape_string( $link, trim( $_POST[ 'item_name' ] ) ) ; }

# Check for a item decription.
if (empty( $_POST[ 'item_desc' ] ) )
{ $errors[] = 'Enter the item decription.' ; }
else
{ $d = mysqli_real_escape_string( $link, trim( $_POST[ 'item_desc' ] ) ) ; }

# Check for a item image.
if (empty( $_POST[ 'item_img' ] ) )
{ $errors[] = 'Enter the item image.' ; }
else
{ $img = mysqli_real_escape_string( $link, trim( $_POST[ 'item_img' ] ) ) ; }

# Check for a item price.
if (empty( $_POST[ 'item_price' ] ) )
{ $errors[] = 'Enter the item image.' ; }
else
{ $p = mysqli_real_escape_string( $link, trim( $_POST[ 'item_price' ] ) ) ; }


# On success data into my_table on database.
if ( empty( $errors ) ) 
{
$q = "INSERT INTO products (item_name, item_desc, item_img, item_price) 
VALUES ('$n','$d', '$img', '$p' )";
$r = @mysqli_query ( $link, $q ) ;
if ($r)
{ echo '<p>New record created successfully</p>
    <a href="create_record.php">Add Records</a>  |  <a href="read_table.php">Read Records</a>  |  <a href="update_record.php">Update Record</a>  | <a href="delete_record.php">Delete Record</a>'; }

# Close database connection.
mysqli_close($link); 

exit();
}

# Or report errors.
else 
{
echo '<p>The following error(s) occurred:</p>' ;
foreach ( $errors as $msg )
{ echo "$msg<br>" ; }
echo '<p>Please try again.</p></div>';
# Close database connection.
mysqli_close( $link );

}  
}
?>

<style>

form{
  margin-left: 50px;
}

</style>
<br>
<form action="create.php" method="post">
  <label for="item_id">Item ID</label>
  <input type="text" name="item_id" value=" <?php if (isset($_POST['item_id'])) echo $_POST['item_id']; ?>"> 
 <br>
  <label for="item_name">Item Name</label>
  <input type="text" name="item_name" value=" <?php if (isset($_POST['item_name'])) echo $_POST['item_name']; ?>"> 
 <br>
  <label for="item_desc">Item Description</label>
  <input type="text" name="item_desc" value=" <?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?>">
 <br>
  <label for="item_img">Item Image</label>
  <input type="text" name="item_img" value=" <?php if (isset($_POST['item_img'])) echo $_POST['item_img']; ?>">
 <br>
  <label for="item_desc">Item Price</label>
  <input type="text" name="item_price" value=" <?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>">
 <br>
  <input type="submit" value="Add Record"></p>
</form><!-- closing form -->
 <br>
  <a href="create.php">Add Records</a>  |  <a href="read.php">Read Records</a>  |  <a href="update.php">Update Record</a>  | <a href="delete.php">Delete Record</a>

</html>
