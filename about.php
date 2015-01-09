<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>About</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/base.css" />
    <style>
        .roundContainer {
            border-radius: 50%;
            overflow: hidden;
            width: 300px;
            height: 300px;
        }

        .round img {
            min-width: 100%;
            min-height: 100%;
        }
    </style>
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <?php include 'boilerplate.html';?>
        <img src="img/growbusiness.jpg" width="1920px" />
        <h2 style="text-align: center">Rain Over The Frosted Heavens</h2>
        <p style="text-align: center">Join us, and together we will walk towards a brighter future.</p>
        <ul class="small-block-grid-1 large-block-grid-3">
            <li><div ><div class="roundContainer" style="margin: auto">
                        <img src="/img/discussion.jpg" />
                    </div>
                    <p style="text-align: center; font-size: large">Professionalism</p>
                    <p style="padding: 20px">We don't mess around. Net income is up 42% year over year. Our accountants have accountants!</p>
                </div>
            </li>
            <li><div ><div class="roundContainer"style="margin: auto">
                        <img src="/img/brainstorm.jpg" />
                    </div>
                    <p style="text-align: center; font-size: large">Teamwork</p>
                    <p style="padding: 20px">There's no &quot;I&quot; in Investment...Well, fine, maybe there is. But you get the idea.</p>
                </div>
            </li>
            <li><div ><div class="roundContainer"style="margin: auto">
                        <img src="/img/donuts.jpg" />
                    </div>
                    <p style="text-align: center; font-size: large">Donuts</p>
                    <p style="padding: 20px">Some organizations feed their employees with kale and green tea. Fools.</p>
                </div>
            </li>
        </ul>

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