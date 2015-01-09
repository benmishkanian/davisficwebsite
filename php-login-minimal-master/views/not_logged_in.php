<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Applications</title>
    <link rel="stylesheet" href="/css/foundation.css" />
    <link rel="stylesheet" href="/css/base.css" />
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <?php include '../../boilerplate.html';?>
        <div class="row"><div class="small-centered columns">
        <!-- login form box -->
        <form method="post" action="/getapplications.php" name="loginform">
            <p style="font-size: small">Warning: This form is not encrypted. Anyone on the local network can steal your password, so it's not
                recommended to log in from public Wi-Fi.</p>
            <div class="small-5 columns">
            <label for="login_input_username">Username</label>
            <input id="login_input_username" class="login_input" type="text" name="user_name" required />
            </div>
            <div class="small-5 columns">
            <label for="login_input_password">Password</label>
            <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />
            </div>
            <div class="small-5 small-centered columns">
            <input type="submit"  name="login" value="Log in" class="button"/><br />
                <a href="../register.php">Register new account</a>
</div>
        </form>



        <a class="exit-off-canvas"></a>
                </div></div>
    </div>
</div>
<script src="/js/vendor/jquery.js"></script>
<script src="/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>