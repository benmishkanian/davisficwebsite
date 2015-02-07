<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Members</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/base.css" />
    <style>
        .descText {
            display: none;
        }

        .photo {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <cms:repeatable name='officers_row' label="Rows of Officer Bios, with 5 people per row">
            <cms:editable type='image' name='ophoto1' label='Photo 1' col_width='500'/>
            <cms:editable type='text' name='oname1' label='Name 1' width='90' col_width='100'/>
            <cms:editable type='text' name='odescription1' label='Bio 1' width='290' col_width='300'/>

            <cms:editable type='image' name='ophoto2' label='Photo 2' col_width='500'/>
            <cms:editable type='text' name='oname2' label='Name 2' width='90' col_width='100'/>
            <cms:editable type='text' name='odescription2' label='Bio 2' width='290' col_width='300'/>

            <cms:editable type='image' name='ophoto3' label='Photo 3' col_width='500'/>
            <cms:editable type='text' name='oname3' label='Name 3' width='90' col_width='100'/>
            <cms:editable type='text' name='odescription3' label='Bio 3' width='290' col_width='300'/>

            <cms:editable type='image' name='ophoto4' label='Photo 4' col_width='500'/>
            <cms:editable type='text' name='oname4' label='Name 4' width='90' col_width='100'/>
            <cms:editable type='text' name='odescription4' label='Bio 4' width='290' col_width='300'/>

            <cms:editable type='image' name='ophoto5' label='Photo 5' col_width='500'/>
            <cms:editable type='text' name='oname5' label='Name 5' width='90' col_width='100'/>
            <cms:editable type='text' name='odescription5' label='Bio 5' width='290' col_width='300'/>
        </cms:repeatable>
        <cms:repeatable name='people_row' label="Rows of Member Bios, with 5 people per row">
            <cms:editable type='image' name='photo1' label='Photo 1' col_width='500'/>
            <cms:editable type='text' name='name1' label='Name 1' width='90' col_width='100'/>
            <cms:editable type='text' name='description1' label='Bio 1' width='290' col_width='300'/>

            <cms:editable type='image' name='photo2' label='Photo 2' col_width='500'/>
            <cms:editable type='text' name='name2' label='Name 2' width='90' col_width='100'/>
            <cms:editable type='text' name='description2' label='Bio 2' width='290' col_width='300'/>

            <cms:editable type='image' name='photo3' label='Photo 3' col_width='500'/>
            <cms:editable type='text' name='name3' label='Name 3' width='90' col_width='100'/>
            <cms:editable type='text' name='description3' label='Bio 3' width='290' col_width='300'/>

            <cms:editable type='image' name='photo4' label='Photo 4' col_width='500'/>
            <cms:editable type='text' name='name4' label='Name 4' width='90' col_width='100'/>
            <cms:editable type='text' name='description4' label='Bio 4' width='290' col_width='300'/>

            <cms:editable type='image' name='photo5' label='Photo 5' col_width='500'/>
            <cms:editable type='text' name='name5' label='Name 5' width='90' col_width='100'/>
            <cms:editable type='text' name='description5' label='Bio 5' width='290' col_width='300'/>
        </cms:repeatable>
        <?php include 'boilerplate.html';?>
        <div style="max-width: 1920px" class="row">
            <img src="img/allmembers.jpeg" />
        </div>
        <h3 style="text-align: center">Click or tap a photo to learn more about our members</h3>
        <div class="row">
            <h2 style="font-family: cursive">Officers</h2>
            <hr>
        </div>
        <cms:show_repeatable 'officers_row'>
        <div class="row">
            <ul class="small-block-grid-5">
                <li><div>
                        <img class="photo" src="<cms:show ophoto1 />" style="margin: auto"/>
                        <p class=".personName"><cms:show oname1 /></p>
                        <p class="descText"><cms:show odescription1 /></p>
                    </div></li>
                <li><div>
                        <img class="photo" src="<cms:show ophoto2 />" style="margin: auto"/>
                        <p class=".personName"><cms:show oname2 /></p>
                        <p class="descText"><cms:show odescription2 /></p>
                    </div></li>
                <li><div>
                        <img class="photo" src="<cms:show ophoto3 />" style="margin: auto"/>
                        <p class=".personName"><cms:show oname3 /></p>
                        <p class="descText"><cms:show odescription3 /></p>
                    </div></li>
                <li><div>
                        <img class="photo" src="<cms:show ophoto4 />" style="margin: auto"/>
                        <p class=".personName"><cms:show oname4 /></p>
                        <p class="descText"><cms:show odescription4 /></p>
                    </div></li>
                <li><div>
                        <img class="photo" src="<cms:show ophoto5 />" style="margin: auto"/>
                        <p class=".personName"><cms:show oname5 /></p>
                        <p class="descText"><cms:show odescription5 /></p>
                    </div></li>
            </ul>
        </div>
        </cms:show_repeatable>
        <div class="row">
            <h2 style="font-family: cursive">Members</h2>
            <hr>
        </div>
        <cms:show_repeatable 'people_row'>
        <div class="row">
            <ul class="small-block-grid-5">
                <li><div>
                        <img class="photo" src="<cms:show photo1 />" style="margin: auto"/>
                        <p class=".personName"><cms:show name1 /></p>
                        <p class="descText"><cms:show description1 /></p>
                    </div></li>
                <li><div>
                        <img class="photo" src="<cms:show photo2 />" style="margin: auto"/>
                        <p class=".personName"><cms:show name2 /></p>
                        <p class="descText"><cms:show description2 /></p>
                    </div></li>
                <li><div>
                        <img class="photo" src="<cms:show photo3 />" style="margin: auto"/>
                        <p class=".personName"><cms:show name3 /></p>
                        <p class="descText"><cms:show description3 /></p>
                    </div></li>
                <li><div>
                        <img class="photo" src="<cms:show photo4 />" style="margin: auto"/>
                        <p class=".personName"><cms:show name4 /></p>
                        <p class="descText"><cms:show description4 /></p>
                    </div></li>
                <li><div>
                        <img class="photo" src="<cms:show photo5 />" style="margin: auto"/>
                        <p class=".personName"><cms:show name5 /></p>
                        <p class="descText"><cms:show description5 /></p>
                    </div></li>
            </ul>
        </div>
        </cms:show_repeatable>
        <div class="desc" style="overflow: hidden; background-color: #000000; width: 100%; margin-bottom: 5%; padding-top: 1%">
            <p style="text-align: center; color: #ffffff; vertical-align: middle">This is a description</p>
        </div>
        <?php include 'footer.html';?>

        <a class="exit-off-canvas"></a>
    </div>
</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
    $(".desc").hide();

    function resetScreen() {
        // reset opacity of photos
        $("body").find(".photo").each(function() {
            $(this).parent().animate({
                opacity: 1.00
            }, "fast");
        });
        // hide description
        $(".desc").slideToggle("fast");
        // remove screen clear listener
        $(document).unbind("click", resetScreen);
    }

    $(".photo").click(function(event) {
        // clear any descriptions
        var desc = $(".desc");
        desc.remove();
        // insert hidden description in a row after this photo
        var clickedPhoto = $(this);
        clickedPhoto.parent().parent().parent().parent().after(desc);
        // if no description is visible, gray all other photos, and reveal description
        var descInvisible = desc.css("display") == "none";
        if (descInvisible) {
            // write description text
            var descText = clickedPhoto.parent().children(".descText").text();
            desc.children().html(descText);
            // make other photos transparent
            $("body").find(".photo").not(clickedPhoto).each(function() {
                $(this).parent().animate({
                    opacity: 0.15
                }, "fast");
            });
            // toggle description visibility
            desc.slideToggle("fast");
            // set up listener to detect subsequent clicks and reset the screen
            event.stopPropagation();
            $(document).click(resetScreen);
        }
        // otherwise, this photo was clicked while another photo is being focused. allow fall through to resetScreen.
    })
</script>
</body>
</html>
<?php COUCH::invoke(); ?>