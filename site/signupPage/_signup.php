<!--
    Handle Validations in Javascript
    - Password and Confirm Mismatch
    - Ajax call to check if username taken
-->
<script>
    var url = window.location.href.split("site")[0] + "site/api/userCheckApi.php";
    var userResponse = "";
    function getUser(user) {
        $.ajax({
            url: url,
            type: "POST",
            data: { user: user },
            async: false,
            dataType: "json",
            success: function(response) {
                userResponse = response;
            },
            error: function(error) {
                userResponse = "error";
            }
        });
    }

    function validate() {
        var p = document.getElementById("password");
        var c = document.getElementById("confirm_password");
        var u = document.getElementById("username");

        if (p.value != c.value) {
            var err = document.getElementById("confirmErr");
            err.innerHTML = "Password Mismatch!";
            return false;
        }
        getUser(u.value);
        if (userResponse == "found" || userResponse == "error") {
            var err = document.getElementById("usernameErr");
            err.innerHTML = "Username Taken!";
            return false;
        }

        //Password length requirements?  Password contains requirements?

        return true;
    }
</script>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "database/config.php";
    require_once "database/user.php";
    require_once "php/createUser.php";
} else {
?>
<form action="index.php?nav=signup" method="post" onsubmit="return validate()">
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <div class="form-group">
            <label>Username</label>
            <input id="username" type="text" name="username" class="form-control" required>
            <span id="usernameErr"></span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input id="password" type="password" name="password" class="form-control" required>
            <span id="passwordErr"></span>
        </div>
        <div class="form-group">
            <label class="confirm_password">Confirm Password</label>
            <input id="confirm_password" type="password" name="confirm_password" class="form-control" required>
            <span id="confirmErr"></span>
        </div>
        <div class="form-group button">
            <input type="submit" class="btn btn-primary" value="Register">
        </div>
        <p>Already have an account? <a href="index.php?nav=account">Login here</a>.</p>
    </div>
</form>
<?php
}
 ?>
