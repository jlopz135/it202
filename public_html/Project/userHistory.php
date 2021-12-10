<?php
require(__DIR__ . "/../../partials/nav.php");
//user can see their purhcase history
if (!is_logged_in()) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "home.php"));
}

$userId = get_user_id();
$db = getDB();
$query = "SELECT * FROM orders WHERE user_id = $userId";
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
}
?>
<h3>All Orders</h3>
<?php if ($results && count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table padding=5>
        <?php foreach ($results as $index => $record) : ?>
            <?php if ($index == 0) : ?>
                <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                    <th>List Items</th>
                    
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>

                <td>
                    <a href="orderDetails.php?id=<?php se($record, "id"); //see purchase details
                    ?>">List Items</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

   
<?php endif; ?>
<style>
    td, th{
        border: 1px solid black;
        padding: 3px 10px;
        justify-items: center;
    }

</style>
