<?php
require(__DIR__ . "/../../partials/nav.php");
if (isset($_POST["submit"])) {
  $comment = $_POST['comment'];
  $rating = $_POST['rating'];
  $db = getDB();
  $item_id = $_GET['id'];
  $user = get_user_id();
  $params = [":comment" => $comment, ":rating" => $rating, ":user_id" => get_user_id(), ":prod_id" => $item_id];

  $query2 = "INSERT INTO ratings (product_id, user_id, rating, comment) VALUES (:prod_id, :user_id, :rating, :comment)";
  $stmt2 = $db->prepare($query2);
  try {
    $stmt2->execute($params);
    flash("Thank you for your Review!");
  } catch (PDOException $e) {
    flash("Error Receiving your Review");
  }
}

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
      if (se($item, "id", "", false) == $item_id) :
    ?>
        <div class="container">

          <section class="mb-5">

            <div class="row">
              <div class="col-md-6">

                <h1><?php se($item, "name") ?></h1>
                <a href="admin/edit_item.php?id=<?php se($item, "id"); ?>"> EDIT: <?php se($item, "name"); ?></a>
                <div class="product-image">
                  <img src=<?php se($item, 'img'); ?> height=auto; width=100%; onerror="if (this.src != '<?php se($item, 'img'); ?>') this.src = 'pics/test.png';">
                </div>
                <p class="mb-2 text-muted text-uppercase small">Category: <?php se($item, "category") ?></p>
                <p><span class="mr-1"><strong>Cost: $<?php se($item, "unit_price") ?></strong></span></p>
                <p class="pt-1"><?php se($item, "description") ?></p>

                <div class="table-responsive">
                  <table class="table table-lg  mb-0">
                    <tbody>
                      <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                      <td>INTERNATIONAL</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <hr>
                <div class="table-responsive mb-2">
                  <table class="table table-lg table-borderless">
                    <tbody>
                      <tr>
                        <td></td>
                        <td>In Stock:</td>
                        <td>Rating:</td>
                      </tr>
                      <tr>
                        <td class="pl-0">
                          <div class="def-number-input number-input mb-0">
                            <a href="cart.php?action=add&id=<?php se($item, "id"); ?>"> ADD TO CART </a>
                          </div>
                        </td>
                        <td>
                          <div class="mt-1">
                            <div class="form-check form-check-inline pl-0">
                              <?php echo se($item, "stock"); ?>
                            </div>
                          </div>

                        </td>
                        <td>
                          <div class="mt-1">
                            <div class="form-check form-check-inline pl-0">
                              <?php echo $rating; ?> Stars
                            </div>
                          </div>
                        </td>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <h2>LEAVE A REVIEW: </h2>
                  <form onsubmit="myFunction()" method="POST">
                    <fieldset>
                      <span class="star-cb-group">
                        <input type="radio" id="rating-1" name="rating" value="5" checked="checked" /><label for="rating-1">1</label>
                        <input type="radio" id="rating-2" name="rating" value="4" /><label for="rating-2">2</label>
                        <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
                        <input type="radio" id="rating-4" name="rating" value="2" /><label for="rating-4">4</label>
                        <input type="radio" id="rating-5" name="rating" value="1" /><label for="rating-5">5</label>
                      </span>
                    </fieldset>
                    <label for="comment">Add Review Here: </label><br>
                    <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
                    <br><br>
                    <input type="submit" value="Submit" name="submit">
                  </form>
                  <script>
                    function myFunction() {
                      alert("The Review was Submitted!");
                    }
                  </script>
                </div>
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