<!--
    Form needs to be styled
    Move Javascript to eternal file
-->
<script>
    var url = window.location.href.split("site")[0] + "site/api/createUser.php"
    function submitData() {
        var u = document.getElementById("username").value;
        var p = document.getElementById("password").value;
        $.ajax({
            url: url,
            type: "POST",
            data: { u: u, p: p},
            async: true,
            dataType: "json",
            success: function(response) {
                alert(response);
            },
            error: function(error) {
                alert("error");
            }
        })
    }
</script>

<div class="wrapper">
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <div class="form-group">
        <label>Username</label>
        <input id="username" type="text" name="username" class="form-control">
        <span class="help-block">Placeholder</span>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input id="password" type="password" name="password" class="form-control">
        <span class="help-block">Placeholder</span>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control">
        <span class="help-block">Placeholder</span>
    </div>
    <div class="form-group">
        <input type="button" onclick="submitData()" class="btn btn-primary" value="Register">
        <input type="reset" class="btn btn-default" value="Reset">
    </div>
    <p>Already have an account? <a href="loginPage/_login.php">Login here</a>.</p>
</div>
