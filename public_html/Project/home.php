<?php
require(__DIR__."/../../partials/nav.php");
?>
<h1>Home</h1>
<?php
if(is_logged_in(true)){
    flash("Welcome, " . get_username());
}
else{
    flash("You're not logged in");
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>