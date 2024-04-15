<?php 
include('session-cart.php');

# Check for passed total and cart.
if (isset($_GET['total']) && ($_GET['total'] > 0) && (!empty($_SESSION['cart']))) {
    # Open database connection.
    require('connect_db.php');

    # Check if 'user_id' is set in the session.
    if (isset($_SESSION['user_id'])) {
        # Store buyer and order total in 'orders' database table.
        $total = mysqli_real_escape_string($link, $_GET['total']);
        $user_id = mysqli_real_escape_string($link, $_SESSION['user_id']);
        $q = "INSERT INTO orders (user_id, total, order_date) VALUES ('$user_id', '$total', NOW())";
        if (mysqli_query($link, $q)) {
            # Retrieve current order number.
            $order_id = mysqli_insert_id($link);

            # Retrieve cart items from 'products' database table.
            $ids = implode(',', array_keys($_SESSION['cart']));
            $q = "SELECT * FROM products WHERE item_id IN ($ids) ORDER BY item_id ASC";
            $r = mysqli_query($link, $q);

            # Store order contents in 'order_contents' database table.
            while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                $item_id = $row['item_id'];
                $quantity = $_SESSION['cart'][$item_id]['quantity'];
                $price = $_SESSION['cart'][$item_id]['price'];
                $query = "INSERT INTO order_contents (order_id, item_id, quantity, price) VALUES ('$order_id', '$item_id', '$quantity', '$price')";
                mysqli_query($link, $query);
            }

            # Close database connection.
            mysqli_close($link);

            # Display order number.
            echo "<div class=\"container\">
                <div class=\"alert alert-secondary\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>Thanks for your order. Your Order Number Is #".$order_id."</p>
                </div>
            </div>";

            # Remove cart items.  
            $_SESSION['cart'] = NULL;
        } else {
            echo "Error: " . mysqli_error($link);
        }
    } else {
        echo "User not logged in.";
    }
} else {
    echo '<div class=\"container\">
        <div class=\"alert alert-secondary\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <p>There are no items in your cart.</p>
        </div>
    </div>';
}
?>
