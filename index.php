<!--
Written by Ben Mishkanian - benmishkanian [at] ucdavis [dot] edu
-->
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Ben Mishkanian">
    <meta name="description" content="The Finance and Investment Club at UC Davis">
    <meta name="keywords" content="finance, investment, Davis, business, economics, banking, accounting, stocks, analysis, networking, career, FIC">
    <title>UC Davis Finance &amp; Investment Club</title>
	<link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/base.css" />
	<script src="js/vendor/modernizr.js"></script>
	<style>
		.captionBox {
			width: 100%;
			height: 18%;
			background-color: #000000;
			opacity: 0.7;
			position: absolute;
			bottom: 0px;
			left: 0px;
		}

		.captionText {
			color: #ffffff;
			position: absolute;
			left: 5%
		}

		.captionTextHeading {
			font-size: 220%;
			bottom: 8%;
		}

		.captionTextBody {
            font-size: 170%;
			bottom: 2%;
		}

		hr.fade {
			margin: 0%;
			border: 0;
			height: 1px;
			background: #333;
			background-image: -webkit-linear-gradient(left, #ccc, #333, #ccc);
			background-image:    -moz-linear-gradient(left, #ccc, #333, #ccc);
			background-image:     -ms-linear-gradient(left, #ccc, #333, #ccc);
			background-image:      -o-linear-gradient(left, #ccc, #333, #ccc);
		}
		.eventInfo {
			padding-top: 5%;
			padding-bottom: 5%;
		}
		.eventDate {
			color: red;
		}

		@media screen and (max-width: 640px) {
			.eventInfo {
				padding-top: 0%;
				padding-bottom: 0%;
			}
		}
	</style>
    <script>
        var jssor_slider1;

        function pauseSlider()
        {
            jssor_slider1.$Pause();
        }
    </script>
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
		<!-- Desktop Navigation Bar -->
        <?php include 'boilerplate.html';?>
		<!-- Main content -->
		<section class="main-section" style="padding: 0">
			<div class="row">
				<div class="large-12 columns">
                    <img src="img/Title.svg" />
                    <p style="text-align: center; margin-bottom: 0; padding-bottom: 0; font-family: Lucida Grande; color: #002855">at UC Davis</p>
                </div>
			</div>
			<!-- Jssor carousel -->
			<div style="max-width: 1920px" class="row">
				<div id="slider1_container" style="position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1920px; height: 1037px; overflow: hidden">
					<div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1920px; height: 1038px;">
						<div>
							<a href="about.php">
								<img u="image" src="img/everyone.jpeg" style="position: absolute" />
								<div class="captionBox"></div>
								<p class="captionText captionTextHeading">Learn more about the FIC</p>
								<p class="captionText captionTextBody">Find out what distinguishes us and our alumni</p>
							</a>
						</div>
						<div>
							<a href="events.php">
								<img u="image" src="img/mixer.jpg" style="position: absolute; width: 1920px" />
								<div class="captionBox"></div>
								<p class="captionText captionTextHeading">Browse upcoming events</p>
								<p class="captionText captionTextBody">Annual events include career panels and open meetings</p>
							</a>
						</div>
						<div>
							<a href="apply.php">
								<img u="image" src="img/analysis.JPG" style="position: absolute" />
								<div class="captionBox"></div>
								<p class="captionText captionTextHeading">The application for Spring 2015 is now open</p>
								<p class="captionText captionTextBody">Click here to apply</p>
							</a>
						</div>
					</div>

					<!-- Arrow Navigator Skin Begin -->
					<style>
						/* jssor slider arrow navigator skin 02 css */
						/*
                        .jssora02l              (normal)
                        .jssora02r              (normal)
                        .jssora02l:hover        (normal mouseover)
                        .jssora02r:hover        (normal mouseover)
                        .jssora02ldn            (mousedown)
                        .jssora02rdn            (mousedown)
                        */
						.jssora02l, .jssora02r, .jssora02ldn, .jssora02rdn
						{
							position: absolute;
							cursor: pointer;
							display: block;
							background: url(img/a02.png) no-repeat;
							overflow:hidden;
						}
						.jssora02l { background-position: -3px -33px; }
						.jssora02r { background-position: -63px -33px; }
						.jssora02l:hover { background-position: -123px -33px; }
						.jssora02r:hover { background-position: -183px -33px; }
						.jssora02ldn { background-position: -3px -33px; }
						.jssora02rdn { background-position: -63px -33px; }
					</style>
					<!-- Arrow Left -->
        <span u="arrowleft" class="jssora02l" style="width: 55px; height: 55px; top: 50%; left: 15px;" onclick="pauseSlider()">
        </span>
					<!-- Arrow Right -->
        <span u="arrowright" class="jssora02r" style="width: 55px; height: 55px; top: 50%; right: 15px" onclick="pauseSlider()">
        </span>
					<!-- Arrow Navigator Skin End -->
				</div>
			</div>
			<!-- Event Listings -->
			<div class="row">
				<div class="large-12 columns" style="background-color: #ffffff">
					<div class="large-10 medium-10 columns">
						<table style="border: none; outline: none; margin-bottom: 0px;">
							<tr>
								<td width="30%"><img src="img/mic.jpg"/></td>
								<td width="70%"><p><a href="events.php#openMeetings"><b>Open Meeting</b></a><br />Come out, meet the club members,
                                    and listen to a renowned guest.</p></td>
							</tr>
						</table>

					</div>
					<div class="large-2 medium-2 columns eventInfo" style="text-align: center;">
						<span class="eventDate">TBA<br /></span>
						<a href="#" style="font-size: small">(more info)</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<hr class="fade">
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns" style="background-color: #ffffff">
					<div class="large-10 medium-10 columns">
						<table style="border: none; outline: none; margin-bottom: 0px;">
							<tr>
								<td width="30%"><img src="img/panel.jpg"/></td>
								<td width="70%"><p><a href="events.php#careerPanels"><b>Career Panel</b></a><br />Come ask questions from a talented group
									of professionals spanning the entire financial industry!</p></td>
							</tr>
						</table>

					</div>
					<div class="large-2 medium-2 columns eventInfo" style="text-align: center;">
						<span class="eventDate">Feb 10<br /></span>
                        <a href="#" style="font-size: small">Business formal attire</a>
                        <a href="#" style="font-size: small">Location TBA</a>
					</div>
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
					var options = {
						$AutoPlay: true,
                        $PauseOnHover: 0,
                        $AutoPlayInterval: 7000,
						$ArrowNavigatorOptions: {
							$Class: $JssorArrowNavigator$,
							$ChanceToShow: 2
						}
					};
					jssor_slider1 = new $JssorSlider$('slider1_container', options);

					function ScaleSlider() {
						var parentWidth = $('#slider1_container').parent().width();
						if (parentWidth) {
							jssor_slider1.$ScaleWidth(parentWidth);
						}
						else
							window.setTimeout(ScaleSlider, 30);
					}
					//Scale slider after document ready
					ScaleSlider();
					if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
						//Capture window resize event
						$(window).bind('resize', ScaleSlider);
					}
				});
			</script>
		</section>

        <?php include 'footer.html';?>

		<a class="exit-off-canvas"></a>

	</div>
</div>

</body>
</html>
