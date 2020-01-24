<!DOCTYPE html>

<html>
<head>
    <title>Ridge Roamers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/assets/img/favicon.png">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css'
          href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="/assets/css/headers/header-default-centered.css">
    <link rel="stylesheet" href="/assets/css/footers/footer-v2.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/assets/plugins/animate.css">
    <link rel="stylesheet" href="/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="/assets/css/theme-colors/dark-red.css" id="style_color">
    <link rel="stylesheet" href="/assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>
<body>
<div class="wrapper">
    <!--=== Header ===-->
    <?php $currentPage = 'home' ?> <!--Set the current active page variable -->
    <?php include("header.php") ?>
    <!-- /Header -->

	<!--=== Popup Notification - Climbing Comp ===
	<div id="climbingComp" class="modal fade" role="dialog">
		<div class="modal-dialog">

		<!-- Modal content
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><strong>Keweenaw Climbing Competition</strong></h4>
		  </div>
		  <div class="modal-body">
			<p>The Keweenaw Climbing competition is the bi-annual climbing comp put on by Ridge Roamers, the MTU climbing club.
			Participation is $15, or pre-register before the competition date and pay $10.
			Payment is due at the door on the day of the competition.
			(Cash or Check payable to Ridge Roamers).
			There are three divisions: beginner, intermediate and advanced.
			Pizza is provided for lunch and there are sweet prizes afterwards!
			</br></br>
			<strong>When: March 25th, 9am</strong></br>
			<strong>Where: SDC Climbing Wall - Multipurpose Gym</strong></br>
			<strong>Cost: $15 at door or $10 if pre-registered</strong>
			</p>
		  </div>
		  <div class="modal-footer">
			<a type="button" class="btn btn-u pull-left" href="http://goo.gl/qMR8Lr" target="_blank">Register</a>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- /Popup Notification -->

    <!--=== Carousel ===-->
    <div class="carousel slide carousel-v1" id="myCarousel">
        <div class="carousel-inner">
			<div class="item active">
                <img class="center-block" alt="" src="/assets/img/slides/slide3.jpg">
                <div class="carousel-caption">
                    <p>Ridge Roamers at K-Day</p>
                </div>
            </div>
            <div class="item">
                <img class="center-block" alt="" src="/assets/img/slides/slide1.jpg">
                <div class="carousel-caption">
                    <p>Mitchell Turner attempting "Golden Heart" at Silver Mountain</p>
                </div>
            </div>
            <div class="item">
                <img class="center-block" alt="" src="/assets/img/slides/slide2.jpg">
                <div class="carousel-caption">
                    <p>Ridge Roamers hanging out at Silver Mountain</p>
                </div>
            </div>
            <div class="item">
                <img class="center-block" alt="" src="/assets/img/slides/slide5.jpg">
                <div class="carousel-caption">
                    <p>Group photo post Keweenaw Climbing Comp</p>
                </div>
            </div>
        </div>

        <div class="carousel-arrow">
            <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                <i class="fa fa-angle-left"></i>
            </a>
            <a data-slide="next" href="#myCarousel" class="right carousel-control">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>


    </div>
    <!-- End Carousel -->

    <!--=== Purchase Block ===-->
    <div class="purchase">
        <div class="container overflow-h">
            <div class="row">
                <div class="col-md-9 animated fadeInUp">
                    <span>Ridge Roamers - Rock Climbing Club</span>
                    <p>Welcome to Ridge Roamers, the climbing club at Michigan Technological University.
                        We are the official climbing club of MTU.
                        We maintain the climbing wall inside the SDC Multi-purpose room and also take care of all
                        climbing equipment.
                        The climbing club is open to the public, so anyone is welcome to join.
                        Members fees are the same for community members as students.</p>
                </div>
                <div class="col-md-3 btn-buy animated fadeInDown">
                    <a href="/climbing-wall.php#open-climb" class="btn-u btn-u-lg"><i class="fa fa-sign-in"></i>Join Us!</a>
                </div>
            </div>
        </div>
    </div><!--/row-->
    <!-- End Purchase Block -->

    <!--=== Content Part ===-->
    <div class="container content-sm">
        <!-- Service Blocks -->
        <div class="row margin-bottom-30">
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-users service-icon"></i>
                    <div class="desc">
                        <h4>Open Climbs</h4>
                        <p>The club hosts open climbs Mondays-Thursdays from 7pm-9pm throughout the school year.
                            All are welcome to climb during this time, and climbing gear will be provided.
                            <a href="/climbing-wall.php#open-climb">More info...</a></p>
                    </div>
                </div>
            </div>
            <!--
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-question-circle service-icon"></i>
                    <div class="desc">
                        <h4>Women's & Clinic Nights</h4>
                        <p>On the first and third monday of the month we host a women's climb night.
                            Clinic nights are held on the second and fourth monday of the month.
                            Come ask questions and improve your climbing abilities!
                            <a href="/climbing-wall.php#clinic-night">More info...</a></p>
                    </div>
                </div>
            </div>
            -->
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-calendar service-icon"></i>
                    <div class="desc">
                        <h4>Events</h4>
                        <p>Ridge Roamers hosts multiple events throughout the year; with more events to come!
                          We host a climbing competition once per semester: Keweenaw Climbing Comp. 
                          <a href="/#">More info...</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-thumbs-o-up service-icon"></i>
                    <div class="desc">
                        <h4>Group Events</h4>
                        <p>Ridge Roamers also hosts group events!
                            You can reserve a time to climb at our wall, and climb with the help from our certified
                            belayers.
                            <a href="/groups.php">More info...</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service Blokcs -->
    </div>

    <?php include("footer.php") ?>
</div>
<!-- Scripts at end to make page load faster -->
<!--Load JQuery before Bootstrap inorder for it to work -->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="/assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
<script type="text/javascript" src="/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="/assets/js/app.js"></script>
<script type="text/javascript" src="/assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript" src="/assets/js/subscribe.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init();
        StyleSwitcher.initStyleSwitcher();
        FooterSubscribe.initFooterSubscribe();
    });
</script>
<script type="text/javascript">
    $(window).load(function(){
        $('#climbingComp').modal('show');
    });
</script>
</body>
</html>
