<?php
require_once(__DIR__ . "/../../partials/nav.php");
//Checkout page after clicking cart button
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <?php
    $db = getDB();
    $userId = get_user_id();
    $query = "SELECT * FROM Products JOIN cart on cart.product_id = Products.id and user_id = $userId and quantity > 0";
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

    <h1 style="text-align: center;">Checkout Form</h1>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="confirmation.php" method="post">
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fullname" name="fullname" placeholder="John M. Doe">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="john@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="address" name="address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="New York">

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="NY">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="pay">Form of Payment</label>
                            <select class = "form-control" name="pay" id="pay">
                                <option value="visa">VISA</option>
                                <option value="amex">AMEX</option>
                                <option value="mast">MASTERCARD</option>
                                <option value="cash">CASH</option>
                                
                            </select>
                                <div class="row">
                                    <div class="col-50">
                                    </div>
                                    <div class="col-50">
                                    </div>
                                </div>
                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="freeShipping"> FREE Regular Shipping (7-10 Days)
                    </label>
                    <a></a> 
                    <input type="submit" value="Place Order" class="btn">
                </form>
            </div>
        </div>
        <div class="col-25">
            <div class="container" style="padding: 2px;">
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>
                <?php
                
                $total = 0;
                
                foreach ($results as $item) :
                    $x = $item['unit_price'];
                    $y = $item['quantity'];
                    $subtotal = $x * $y;
                ?>

                    <p><a href="product_details.php?id=<?php se($item, "product_id"); ?>"><?php se($item, "name"); ?></a> <span class="price">$<?php echo $subtotal; ?> </span></p>
                <?php $total = $total + $subtotal;
                endforeach //cart items check, prices are grabbed accordingly. 
                ?>
                <p>Total <span class="price" style="color:black"><b>$<?php echo $total; ?></b></span></p>

            </div>
        </div>
    </div>

</body>

</html>