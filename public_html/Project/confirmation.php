<html>
<body>
<?php 
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    flash("You must be logged in to see this!");
    die(header("Location: login.php"));
}

$name = $_POST['fullname'];
$address = $_POST['address'] . ", " . $_POST['city'] . ", " . $_POST['state'] . ", ". $_POST['zip'];
$payment = $_POST['pay'];

$db = getDB();
$user_id = get_user_id();
$query = "SELECT * FROM cart WHERE user_id = $user_id";
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
//CALC TOTAL

$total = 0;
foreach ($results as $item){
    $x = $item['unit_cost'];
    $y = $item['desired_quantity'];
    $subtotal = $x * $y;
    $total = $total + $subtotal;
}

//INSERT INTO orders TABLE
$query2 = "INSERT INTO orders (user_id, total_price, address, payment method) VALUES ($user_id, $total, $address, $pay)";
$stmt2 = $db->prepare($query2);
$res = [];
try {
    $stmt2->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $res = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}

flash("Successfully Added To orders");



flash("THANK YOU FOR YOUR PURCHASE!");

?>

</body>
<?php require(__DIR__ . "/../../partials/footer.php");?>
</html>