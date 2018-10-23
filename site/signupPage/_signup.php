<!--
    Handle Validations in Javascript
    - Password and Confirm Mismatch
    - Ajax call to check if username taken
-->
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "database/config.php";
    require_once "database/user.php";
    require_once "php/createUser.php";
} else {
?>
<form action="index.php?nav=signup" method="post">
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <div class="form-group">
            <label>Username</label>
            <input id="username" type="text" name="username" class="form-control" required>
            <span class="help-block">Placeholder</span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input id="password" type="password" name="password" class="form-control" required>
            <span class="help-block">Placeholder</span>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input id="confirm_password" type="password" name="confirm_password" class="form-control" required>
            <span class="help-block">Placeholder</span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Register">
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
        <p>Already have an account? <a href="index.php?nav=account">Login here</a>.</p>
    </div>
</form>
<?php
}
 ?>
