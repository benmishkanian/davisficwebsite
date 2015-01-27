<?php require_once( 'couch/cms.php' ); ?>
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

        .bubbleHeading {
            text-align: center;
            font-size: large;
        }
    </style>
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <?php include 'boilerplate.html';?>
        <div style="max-width: 1920px" class="row">
            <img src="img/casualgroup.JPG" width="1920px" />
        </div>
        <cms:editable name='headline' type='richtext'>
            <h2 style="text-align: center">FIC Points of Pride</h2>
            <p style="text-align: center">Our members are constantly progressing their financial literacy and market understanding</p>
        </cms:editable>
        <ul class="small-block-grid-1 large-block-grid-3">
            <li><div ><div class="roundContainer" style="margin: auto">
                        <img src="/img/handshake.JPG" />
                    </div>
                    <cms:editable name='bubble1' type='richtext'>
                    <p class="bubbleHeading">Network</p>
                    <p style="text-align: center">Members find themselves in a like-minded environment of passionate, driven individuals.</p>
                    </cms:editable>
                </div>
            </li>
            <li><div ><div class="roundContainer"style="margin: auto">
                        <img src="/img/muhammadpresentation.JPG" />
                    </div>
                    <cms:editable name='bubble2' type='richtext'>
                    <p class="bubbleHeading">Develop</p>
                    <p style="text-align: center">Expand financial knowledge and refine analytical skills.</p>
                    </cms:editable>
                </div>
            </li>
            <li><div ><div class="roundContainer"style="margin: auto">
                        <img src="/img/excel.jpg" />
                    </div>
                    <cms:editable name='bubble3' type='richtext'>
                    <p class="bubbleHeading">Excel</p>
                    <p style="text-align: center">Our members and alumni hold positions in top-tier financial institutions.</p>
                    </cms:editable>
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
<?php COUCH::invoke(); ?>