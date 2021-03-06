<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/base.css" />
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <?php include "boilerplate.html";?>
        <div style="max-width: 1920px" class="row">
            <img src="img/thankyou.jpg" width="1920px" />
        </div>
        <p style="text-align: center">Your application was submitted successfully. We will review it as soon as possible, and notify you through email.</p>
        <div class="row">
            <div class="large-12 small-centered columns">
                <div><a href="/" class="button" style="display: block; margin: 0 auto; max-width: 350px">Return to home page</a></div>
            </div>
        </div>
        <?php include "footer.html";?>

        <a class="exit-off-canvas"></a>
    </div>
</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>