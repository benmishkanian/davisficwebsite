<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Events</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/base.css" />
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <?php include 'boilerplate.html';?>
        <img src="img/careerpanel4.jpg" width="1920px">
        <div class="row">
            <div id="careerPanels" style="position:relative; top:-50px;"></div>
        <h2 style="font-family: cursive">Career Panels</h2>
        <hr>
        <!-- Jssor Slider Begin -->
        <!-- You can move inline styles to css file or css block. -->
        <div id="slider1_container" style="position: relative; margin: 0px auto; top: 0px; left: 0px; width: 700px;
        height: 456px; background: #191919; overflow: hidden;">


            <!-- Slides Container -->
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 700px; height: 371px; overflow: hidden;">
                <div>
                    <img u="image" src="img/careerpanel2.jpg" />
                    <img u="thumb" src="img/careerpanel2.jpg"/>
                </div>
                <div>
                    <img u="image" src="img/careerpanel3.jpg" />
                    <img u="thumb" src="img/careerpanel3.jpg"/>
                </div>
                <div>
                    <img u="image" src="img/careerpanel5.jpg" />
                    <img u="thumb" src="img/careerpanel5.jpg"/>
                </div>
            </div>

            <!-- Arrow Navigator Skin Begin -->
            <style>
                /* jssor slider arrow navigator skin 05 css */
                /*
                .jssora05l              (normal)
                .jssora05r              (normal)
                .jssora05l:hover        (normal mouseover)
                .jssora05r:hover        (normal mouseover)
                .jssora05ldn            (mousedown)
                .jssora05rdn            (mousedown)
                */
                .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
                {
                    position: absolute;
                    cursor: pointer;
                    display: block;
                    background: url(/img/a17.png) no-repeat;
                    overflow:hidden;
                }
                .jssora05l { background-position: -10px -40px; }
                .jssora05r { background-position: -70px -40px; }
                .jssora05l:hover { background-position: -130px -40px; }
                .jssora05r:hover { background-position: -190px -40px; }
                .jssora05ldn { background-position: -250px -40px; }
                .jssora05rdn { background-position: -310px -40px; }
            </style>
            <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
        </span>
            <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
            <!-- Arrow Navigator Skin End -->

            <!-- Thumbnail Navigator Skin Begin -->
            <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 700px; height: 90px; left:0px; bottom: 0px;">
                <!-- Thumbnail Item Skin Begin -->
                <style>
                    /* jssor slider thumbnail navigator skin 01 css */
                    /*
                    .jssort01 .p           (normal)
                    .jssort01 .p:hover     (normal mouseover)
                    .jssort01 .pav           (active)
                    .jssort01 .pav:hover     (active mouseover)
                    .jssort01 .pdn           (mousedown)
                    */
                    .jssort01 .w {
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        width: 100%;
                        height: 100%;
                    }

                    .jssort01 .c {
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        width: 135px;
                        height: 72px;
                        border: #000 2px solid;
                    }

                    .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                        background: url(/img/t01.png);
                        border-width: 0px;
                        top: 2px;
                        left: 2px;
                        width: 135px;
                        height: 72px;
                    }

                    .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                        top: 0px;
                        left: 0px;
                        width: 135px;
                        height: 72px;
                        border: #fff 1px solid;
                    }
                </style>
                <div u="slides" style="cursor: move;">
                    <div u="prototype" class="p" style="position: absolute; width: 135px; height: 72px; top: 0; left: 0;">
                        <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
                        <div class=c style="width: 135px; height: 72px">
                        </div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!-- Thumbnail Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">javascript</a>
        </div>
        <!-- Jssor Slider End -->
            <p>Our annual career panel is an open event where accomplished financial professionals speak
            about their experiences and careers. It is a great opportunity to gain exposure and insight into
                multiple areas of finance. The event consists of a one-hour Q&amp;A session led by the club,
            followed by open questions and the opportunity to meet the professionals one-on-one.</p>

        </div>
        <div class="row">
            <div id="openMeetings" style="position:relative; top:-50px;"></div>
            <h2 style="font-family: cursive">Open Meetings</h2>
            <hr>
            <!-- Jssor Slider Begin -->
            <!-- You can move inline styles to css file or css block. -->
            <div id="slider2_container" style="position: relative; margin: 0px auto; top: 0px; left: 0px; width: 700px;
        height: 456px; background: #191919; overflow: hidden;">


                <!-- Slides Container -->
                <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 700px; height: 371px; overflow: hidden;">
                    <div>
                        <img u="image" src="img/investing101.jpg" />
                        <img u="thumb" src="img/investing101.jpg"/>
                    </div>
                    <div>
                        <img u="image" src="img/investinginchina.jpg" />
                        <img u="thumb" src="img/investinginchina.jpg"/>
                    </div>
                    <div>
                        <img u="image" src="img/oldteam.jpg" />
                        <img u="thumb" src="img/oldteam.jpg"/>
                    </div>
                </div>

                <!-- Arrow Navigator Skin Begin -->
                <style>
                    /* jssor slider arrow navigator skin 05 css */
                    /*
                    .jssora05l              (normal)
                    .jssora05r              (normal)
                    .jssora05l:hover        (normal mouseover)
                    .jssora05r:hover        (normal mouseover)
                    .jssora05ldn            (mousedown)
                    .jssora05rdn            (mousedown)
                    */
                    .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
                    {
                        position: absolute;
                        cursor: pointer;
                        display: block;
                        background: url(/img/a17.png) no-repeat;
                        overflow:hidden;
                    }
                    .jssora05l { background-position: -10px -40px; }
                    .jssora05r { background-position: -70px -40px; }
                    .jssora05l:hover { background-position: -130px -40px; }
                    .jssora05r:hover { background-position: -190px -40px; }
                    .jssora05ldn { background-position: -250px -40px; }
                    .jssora05rdn { background-position: -310px -40px; }
                </style>
                <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
        </span>
                <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
                <!-- Arrow Navigator Skin End -->

                <!-- Thumbnail Navigator Skin Begin -->
                <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 700px; height: 90px; left:0px; bottom: 0px;">
                    <!-- Thumbnail Item Skin Begin -->
                    <style>
                        /* jssor slider thumbnail navigator skin 01 css */
                        /*
                        .jssort01 .p           (normal)
                        .jssort01 .p:hover     (normal mouseover)
                        .jssort01 .pav           (active)
                        .jssort01 .pav:hover     (active mouseover)
                        .jssort01 .pdn           (mousedown)
                        */
                        .jssort01 .w {
                            position: absolute;
                            top: 0px;
                            left: 0px;
                            width: 100%;
                            height: 100%;
                        }

                        .jssort01 .c {
                            position: absolute;
                            top: 0px;
                            left: 0px;
                            width: 135px;
                            height: 72px;
                            border: #000 2px solid;
                        }

                        .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                            background: url(/img/t01.png);
                            border-width: 0px;
                            top: 2px;
                            left: 2px;
                            width: 135px;
                            height: 72px;
                        }

                        .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                            top: 0px;
                            left: 0px;
                            width: 135px;
                            height: 72px;
                            border: #fff 1px solid;
                        }
                    </style>
                    <div u="slides" style="cursor: move;">
                        <div u="prototype" class="p" style="position: absolute; width: 135px; height: 72px; top: 0; left: 0;">
                            <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
                            <div class=c style="width: 135px; height: 72px">
                            </div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- Thumbnail Navigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">javascript</a>
            </div>
            <!-- Jssor Slider End -->
            <p>In a typical quarter, the club will hold one to two open meetings. The meeting features a well-established
            business professional that presents on some financial topic. Afterwords, you will have an opportunity to
            talk with the speaker, as well as the members, and learn more about us and the club.</p>

        </div>

        <?php include 'footer.html';?>

        <a class="exit-off-canvas"></a>
    </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/jssor.js"></script>
<script src="js/jssor.slider.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
<script>

    jQuery(document).ready(function ($) {

        var _SlideshowTransitions = [
            //Fade in L
            {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out R
            , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in R
            , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
            , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in T
            , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out B
            , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in B
            , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out T
            , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR
            , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR
            , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in TB
            , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out TB
            , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR Chess
            , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR Chess
            , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in TB Chess
            , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out TB Chess
            , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in Corners
            , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out Corners
            , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

            //Fade Clip in H
            , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out H
            , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip in V
            , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out V
            , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        ];

        var options = {
            $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

            $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
            },

            $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
            },

            $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        var jssor_slider2 = new $JssorSlider$("slider2_container", options);
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 800), 300));
                jssor_slider2.$ScaleWidth(Math.max(Math.min(parentWidth, 800), 300));
            }
            else
                window.setTimeout(ScaleSlider, 30);
        }

        ScaleSlider();

        if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
            $(window).bind('resize', ScaleSlider);
        }
    });
</script>
</body>
</html>