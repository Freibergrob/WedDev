<form action=<?=$formPostUrl ?> method="post">
    <div class="wrapper">
        <h2>Login</h2>
        <p class="error"><strong><?=$loginerror ?></strong></p>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="button">

            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <?php
            if($showSignup){
        ?>
            <p class="login">Don't have an account?<a href="<?=$_PATHS['link'] . "signupPage/"?>"> Sign up now</a>.</p>
        <?php
        }
        ?>
    </div>
</form>
