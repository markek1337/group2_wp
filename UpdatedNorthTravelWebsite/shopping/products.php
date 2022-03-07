<?php
include "../Login/register/php-main.php";
include "head_and_footer/header.php";

// variable to store id of user in the current session
$user_ID = $_SESSION["user_ID"];

if(isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    // query to select all items from the cart which this user has put in
    $select_cart = mysqli_query($db, "SELECT * FROM shopping_cart WHERE product_name = '$product_name' AND
    user_ID = '$user_ID'") or die ('query 2 failed');

    // check if the item has been added before
    if(mysqli_num_rows($select_cart) > 0) {
        echo "Product already added to the cart!";
    } else { // query if the item is going to be added for the first time
    mysqli_query($db, "INSERT INTO shopping_cart (user_ID, product_name, price, image, quantity) VALUES
    ('$user_ID', '$product_name', '$product_price', '$product_image', '$product_quantity')")
    or die ('query 1 failed');
    echo "Product added to the cart!";
    }
}

if(isset($_POST['update_cart'])) {
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_item_id'];
    mysqli_query($db, "UPDATE shopping_cart SET quantity = $update_quantity
    WHERE cart_item_id = $update_id") or die ('query update failed');
    echo "Cart quantity updated successfully";
}

if(isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($db, "DELETE FROM shopping_cart WHERE cart_item_id = $remove_id")
    or die ('query remove failed');
    echo "Item was deleted successfully";
}

if(isset($_GET['delete_all'])) {
    mysqli_query($db, "DELETE FROM shopping_cart WHERE user_ID = $user_ID")
    or die ('query remove failed');
}

?>

<!-- Products in the shopping cart -->
<div class="products">
    <div class="box-container" style="display: flex; flex-wrap: wrap; gap:15px; justify-content: center;">
        <?php
            // retrieve data from destination table to show the name, price and image of the destinations
            $select_product = mysqli_query($db, "SELECT * FROM destinations")
            or die ('query failed');
            if (mysqli_num_rows($select_product) > 0) {
                while($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
            <form method="post" class="box" action="" style="text-align: center; border-radius: 5px; box-shadow: var(--box-shadow); border: solid; position: relative; padding:20px; background-color: #EEEEEE; width: 350px;">
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($fetch_product['image']).'" style="height: 250px;" class="img-fluid" />'?><br />
                <div class="name" style="font-size: 20px; color: black; padding:5px 0;"><?php echo $fetch_product['name']; ?></div>
                <div class="price" style="border-radius: 5px; font-size: 25px;">€ <?php echo $fetch_product['price']; ?></div>
                <input type="number" style="margin:10px 0; width: 100%; border: solid; border-radius: 5px; font-size: 17px; color: black; padding:10px 12px" min="1" name="product_quantity" value="1">
                <input type="hidden" name="product_image" value="<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($fetch_product['image']).'" class="img-fluid""'?>">
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                <input type="submit" value="Add to Cart" name="add_to_cart" class="btn">
            </form>
        <?php
                };
            };
        ?>
    </div>
</div>

<!-- Shopping Cart -->
<div class="shopping-cart" style="padding: 20px 0;">
    <h1 class="heading" style="">Shopping cart</h1>

    <table style="width: 100%; text-align: center; border: solid; border-radius: 5px">
        <thead>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total price</th>
            <th>Action</th>
        </thead>
        <tbody style="border: solid; border-radius: 5px">
        <?php
            // decalring a total price variable
            $total = 0;
            // query to display items added by the ueser in the shopping cart
            $cart_query = mysqli_query($db, "SELECT * FROM shopping_cart WHERE user_ID = '$user_ID'")
            or die ('query id failed');
            if (mysqli_num_rows($cart_query) > 0) {
                while($fetch_cart = mysqli_fetch_assoc($cart_query)) {
        ?>
            <tr>
                <td><?php echo $fetch_cart['product_name']; ?></td>
                <td>€ <?php echo $fetch_cart['price']; ?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="cart_item_id" value="<?php echo $fetch_cart['cart_item_id']; ?>">
                        <input type="number" name="cart_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>">
                        <input type="submit" name="update_cart" value="update" class="option-btn" style="width: 100px">
                    </form>
                </td>
                <td>€ <?php echo $sub_total = $fetch_cart['price'] * $fetch_cart['quantity'];?></td>
                <td>
                    <a href="products.php?remove=<?php echo $fetch_cart['cart_item_id']; ?>" class="delete-btn"
                    onclick="return confirm('Remove item form cart?')">Remove</a>
                </td>
            </tr>
        <?php
        $total += $sub_total;
                };
            } else {
                echo '<tr><td style="padding: 20px; text-transform: capitalize" colspan="6"> no item added</td></tr>';
            }
        ?>
        <tr class="table-bottom">
            <td>Grand total: </td>
            <td>€ <?php echo $total; ?> </td>
            <td><a href="products.php?delete_all" onclick="return confirm('Delete all from cart?');"
            class="delete-btn">Delete all?</a></td>
        </tr>
        </tbody>
    </table>
    <div class="cart-btn" style="margin-top: 10px; text-align: center;">
        <a href="#" class="btn <?php echo ($total > 1) ? '':'disabled'; ?>"
        style="background-color: grey;">Proceed to checkout</a>
    </div>
</div>

<?php
include "head_and_footer/footer.php";
?>