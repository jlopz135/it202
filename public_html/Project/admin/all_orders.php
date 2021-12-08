<?php
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin") && !has_role("Owner")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "home.php"));
}

$db = getDB();
//generally try to avoid SELECT *, but this is about being dynamic so I'm using it this time
$query = "SELECT id, user_id, total_price, address, payment_method FROM orders LIMIT 10"; //TODO change table name and desired columns
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
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
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
