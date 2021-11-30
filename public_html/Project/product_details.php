<?php
require(__DIR__ . "/../../partials/nav.php");
$item_id = $_GET['id'];
$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, img FROM Products WHERE stock > 0 && visibility > 0 LIMIT 50"); // admins can't see because visibility checker but this shows how to create shop page for users
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
    <div class="row row-cols-1 row-cols-md-7 g-4">
        <?php foreach ($results as $item) : 
            if (se($item,"id","",false) == $item_id) :
            ?>
<div class="container">

<section class="mb-5">

<div class="row">
  <div class="col-md-6">

    <h1><?php se($item, "name") ?></h1>
    <a href="admin/edit_item.php?id=<?php se($item, "id"); ?>"> EDIT: <?php se($item, "name");?></a>
    <div class = "product-image">
        <img src="<?php se($item,"img");?>" height=auto width=100%>  
    </div>
    <p class="mb-2 text-muted text-uppercase small"><?php se($item,"category")?></p>
    <p><span class="mr-1"><strong>Cost: $<?php se($item, "unit_price")?></strong></span></p>
    <p class="pt-1"><?php se($item,"description") ?></p>
    
    <div class="table-responsive">
      <table class="table table-lg  mb-0">
        <tbody>
            <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
            <td>USA ONLY</td>
          </tr>
        </tbody>
      </table>
    </div>
    <hr>
    <div class="table-responsive mb-2">
      <table class="table table-lg table-borderless">
        <tbody>
          <tr>
            <td class="pl-0 pb-0 w-25">Quantity</td>
            <td class="pb-0">Select Color</td>
          </tr>
          <tr>
            <td class="pl-0">
              <div class="def-number-input number-input mb-0">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                  class="minus"></button>
                <input class="quantity" min="0" name="quantity" value="1" type="number">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                  class="plus"></button>
              </div>
            </td>
            <td>
              <div class="mt-1">
                <div class="form-check form-check-inline pl-0">
                  <input type="radio" class="form-check-input" id="small" name="materialExampleRadios"
                    checked>
                  <label class="form-check-label small text-uppercase card-link-secondary"
                    for="small">#</label>
                </div>
                <div class="form-check form-check-inline pl-0">
                  <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                  <label class="form-check-label small text-uppercase card-link-secondary"
                    for="large">#</label>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <button type="button" class="btn btn-primary btn-md ">Buy now</button>
    <a href="cart.php?action=add&id=<?php se($item, "id"); ?>"> ADD TO CART </a>

  </div>
</div>

</section>
            <?php endif ?>
        <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>