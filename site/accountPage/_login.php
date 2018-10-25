<!--
    Form needs to be styled
-->

<form action=<?=$formPostUrl ?> method="post">
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="button">
            <p><strong><?=$loginerror ?><strong></p>
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <?php
            if($showSignup){
        ?>
            <p>Don't have an account? <a href="index.php?nav=signup">Sign up now</a>.</p>
        <?php
        }
        ?>
    </div>
</form>
