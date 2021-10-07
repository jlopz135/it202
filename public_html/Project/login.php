<?php
require(__DIR__."/../../partials/nav.php");?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <input type="submit" value="Login" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
 //TODO 2: add PHP Code
 if(isset($_POST["email"]) && isset($_POST["password"])){
     //get the email key from $_POST, default to "" if not set, and return the value
     $email = se($_POST, "email","", false);
     //same as above but for password
     $password = se($_POST, "password", "", false);
     //TODO 3: validate/use
     
     
     //sanitize
     $email = sanitize_email($email);
     if(count($errors) > 0){
         flash(var_export($errors, true));
     }
     else{
         //TODO 4
         $db= getDB();
         $stmt = $db->prepare("SELECT email, password FROM Users WHERE email = :email");
         try{
             $r =$stmt->execute([":email" => $email]);
             if($r){
                 $user = $stmt->fetch(PDO::FETCH_ASSOC);
                 if($user){
                     $hash = $user["password"];
                     unset($user["password"]);
                     if(password_verify($password, $hash)){
                         flash("Welcome, $email");
                         $_SESSION["user"] = $user;
                         die(header("Location: home.php"));
                     }
                     else
                     {
                         flash("Password doesn't match");
                     }
                 }else{
                     flash("Invalid email");
                 }
             }
         }catch(Exception $e){
             flash(var_export($e, true));
         }
     }
 }
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>