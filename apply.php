<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Apply</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/base.css" />
    <script>
        function validateEmail() {
            if (document.getElementById("email1").value != document.getElementById("email2").value) {
                // emails do not match
                $("#email2").addClass("error");
                $("#emailError").show();
            }
            else {
                // emails match, hide any visible error
                $("#email2").removeClass("error");
                $("#emailError").hide();
            }
        }
    </script>
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <?php include 'boilerplate.html';?>
        <img src="img/applynow.jpg" width="1920px" />
        <p id="thankYou" style="display: none">Thank you for your application. We will review it as soon as possible.</p>
        <form id="mainForm" data-abide action="upload.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="large-5 columns">
                    <label>First Name</label>
                    <input required name="firstName" type="text" placeholder="large-5.columns" />
                </div>
                <div class="large-5 columns">
                    <label>Last Name</label>
                    <input required name="lastName" type="text" placeholder="large-5.columns" />
                </div>
            </div>
            <div class="row">
                <div class="large-5 columns">
                    <label>Email Address</label>
                    <input required id="email1" name="email" type="email" placeholder="large-5.columns" />
                </div>
                <div class="large-5 columns">
                    <label>Retype Email Address</label>
                    <input id="email2" type="email" placeholder="large-5.columns" onblur="validateEmail()"/>
                    <small id="emailError" class="error" style="display: none">Address does not match</small>
                </div>
            </div>
            <div class="row">
                <div class="large-5 columns">
                    <label>R&eacute;sum&eacute;</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                    <input required name="userfile" type="file" placeholder="PDF file format" />
                </div>
                <div class="large-5 columns">
                    <label>Stock Report</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                    <input required name="stockReport" type="file" placeholder="PDF file format" />
                </div>
            </div>
            <div class="row">
                <div class="large-5 columns small-centered">
                    <input name="upload" type="submit" id="upload" value=" Submit Application " class="button success"/>
                </div>
            </div>
        </form>

        <?php include 'footer.html';?>

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