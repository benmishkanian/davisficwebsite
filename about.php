<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <img src="img/casualgroup.JPG" width="1920px" />
        <h2 style="text-align: center">FIC Points of Pride</h2>
        <p style="text-align: center">Our members are constantly progressing their financial literacy and market understanding</p>
        <ul class="small-block-grid-1 large-block-grid-3">
            <li><div ><div class="roundContainer" style="margin: auto">
                        <img src="/img/handshake.JPG" />
                    </div>
                    <p style="text-align: center; font-size: large">Network</p>
                    <p style="padding: 20px">Members find themselves in a like-minded environment of passionate, driven individuals.</p>
                </div>
            </li>
            <li><div ><div class="roundContainer"style="margin: auto">
                        <img src="/img/muhammadpresentation.JPG" />
                    </div>
                    <p style="text-align: center; font-size: large">Develop</p>
                    <p style="padding: 20px">Expand financial knowledge and refine analytical skills.</p>
                </div>
            </li>
            <li><div ><div class="roundContainer"style="margin: auto">
                        <img src="/img/excel.jpg" />
                    </div>
                    <p style="text-align: center; font-size: large">Excel</p>
                    <p style="padding: 20px">Our members and alumni hold positions in top-tier financial institutions.</p>
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