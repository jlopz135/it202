<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    flash("You must be logged in to see this!");
    die(header("Location: login.php"));
}
?>
<?php
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            // --------------------------------------------------------------------------------------------------------------------------------------
            $db = getDB();
            $query = "SELECT * FROM Products WHERE stock > 0 && visibility > 0";
            $item_id = $_GET['id'];
            $user = get_user_id();
            // update quantity here w item id and user id and if it is already in the users cart then update quantity
            $stmt = $db->prepare($query);
            $results = [];
            try {
                $stmt->execute();
                $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($r) {
                    $results = $r;
                }
            } catch (PDOException $e) {
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
            foreach ($results as $item) :
                if (se($item, "id", "", false) == $item_id) {
                    $cost = se($item, "unit_price", "", false);
                    $query2 = "INSERT INTO cart (product_id, user_id, quantity, unit_cost) VALUES ('$item_id', '$user', '1','$cost') on duplicate key update quantity = quantity + 1";
                    
                    $stmt2 = $db->prepare($query2);
                    try {
                        $stmt2->execute();
                    } catch (PDOException $e) {
                        flash("<pre>" . var_export($e, true) . "</pre>");
                    }
                }
                // if(isset($_POST['add'])){
                //     $ite = $_POST['quantity'];
                //     $edit = mysqli_query($db, "UPDATE cart SET quantity='$ite' where id='$item_id'");
                // }
            endforeach;
            flash("Successfully Added To Cart");
            break;
            // --------------------------------------------------------------------------------------------------------------------------------------
        case "remove":
            $db = getDB();
            $item_id = $_GET['id'];
            $user = get_user_id();
            $query = "UPDATE cart SET quantity = quantity - 1 where  quantity > 0"; // update quantity = quantity  1
            $stmt = $db->prepare($query);
            try {
                $stmt->execute();
            } catch (PDOException $e) {
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
            flash("Remove Successful");
            break;
            // $query = DELETE 
        case "empty":
            $db = getDB();
            $userid = get_user_id();
            $query = "DELETE FROM cart WHERE user_id = $userid";
            $stmt = $db->prepare($query);
            $results = [];
            try {
                $stmt->execute();
            } catch (PDOException $e) {
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
            flash("Cart is Now Empty");
            break;
            //case "quanity": 

    }   // $query = DELETE * from CART
}

?>
<?php
$db = getDB();
$userId = get_user_id();
$query = "SELECT * FROM Products JOIN cart on cart.product_id = Products.id and user_id = $userId";
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>
<div class="container-fluid">
    <h1>CART</h1>
    <div>
        <a href="cart.php?action=empty"> Empty Cart
            </br>
        </a> <a href="shop.php"> Shop </a>
    </div>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        <a href="admin/edit_item.php?id=<?php se($item, "id"); ?>"> EDIT: <?php se($item, "name"); ?></a>
                        <a href="product_details.php?id=<?php se($item, "id"); ?>"><?php se($item, "name"); ?></a>
                    </div>
                    <div class="card-body">
                        <div class="product-image">
                            <img src=<?php se($item, 'img'); ?> height=auto; width=100%;>
                        </div>
                        <h5 class="card-title"> <?php se($item, "name"); ?></h5>
                        <p class="card-text"><?php se($item, "description"); ?>...</p>
                        <a href="cart.php?action=remove&id=<?php se($item, "id"); ?>"> REMOVE ITEM</a> <br>
                        <a href="cart.php?action=quantity&id=<?php se($item, "id"); ?>"> QUANTITY </a> <!-- need to make this into input field type-->
                    </div>
                    <div class="card-footer">
                        Cost: $<?php se($item, "unit_price"); ?>
                        Quantity: <?php se($item, "quantity"); ?>
    

                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </form>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>