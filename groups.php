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
    <link rel="shortcut icon" href="favicon.png">

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
    <link rel="stylesheet" href="/assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="/assets/css/theme-colors/dark-red.css" id="style_color">
    <link rel="stylesheet" href="/assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/assets/css/custom.css">
	 
	 <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="wrapper">
    <!-- === Header === -->
    <?php $currentPage = 'groups' ?> <!--Set the current active page variable -->
    <?php include("header.php") ?>
    <!-- /Header -->

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Groups</h1>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <div class="container content">
        <div class="row margin-bottom-40">
            <div class="col-md-9">
                <div class="headline"><h3>Groups at the Wall</h3></div>
                <h4>General Info</h4>
                <p>
                    The Ridge Roamers hosts events for groups/organizations that would like to climb.
                    Groups/Organizations are able to rent the wall for 1 or more hours, and the club will supply the
                    harnesses and shoes.
                    Ridge Roamers certified belayers will be present to belay and instruct the climbers.
                </p>
                <h4>Restrictions</h4>
                <p>
                    There may only be four harnessed climbers on the rock wall at a time due to only 4 available
                    climbing
                    ropes. Groups are also free to use the bouldering wall with a spotter present.
                    <br><br>
                    There is no limit to the number of participants at the wall during the group event.
                    However, it is the responsibility of the organization leader to control the number of individuals in
                    the
                    SDC at that time.
                    <br><br>
                    Groups are unable to be scheduled from Monday-Thursday 7:00pm-9:00pm. These times are reserved for
                    Ridge
                    Roamers Open Climb events.
                    <br><br>

                    The dates on which the Ridge Roamers can host groups depends greatly on the
                    availability of our Certification Officers since they are all MTU students with busy schedules.
                    Our staff is volunteering their time to help with your group, so please be as patient as possible.
                    We do our best to host all the groups that would like to climb at the wall.
                </p>
            </div>
            <div class="col-md-3">
                <div class="headline"><h3>Cost</h3></div>
                <p>
                    <strong>First Hour:</strong> $25
                    <br>
                    <strong>Subsequent Hours:</strong> $15
                    <br>
                    <i>(Checks payable to Ridge Roamers)</i>
                </p>
            </div>
            <div class="col-md-3">
                <div class="headline"><h3>Liability Release</h3></div>
                <p>
                    A Liability Release Form (waiver) must be filled out by each participant prior to climbing at the
                    wall.
                    This form requires the signature of a parent/guardian if the participant is under the age of
                    eighteen.
                    The liability release form can be found here: <a href="/waiver.php">Ridge Roamers Waiver</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="headline"><h3>Reservations</h3></div>
                <p>
                    To reserve the wall fill out the form below, which will be sent to the Event Organizer. You will
                    receive a confirmation email that the reservation request was sent.
                    <br><br>
                    <i>Note: We require that all requests be submitted a minimum of two (2) weeks prior to the desired
                        climbing date. This allows us to discuss your request with the Certification Officers who will
                        be helping to facilitate the event, as well as to finalize dates.</i>
                </p>

                <div class="panel-group acc-v1" id="form-accordian">
                    <div class="panel panel-default">
                        <div class="panel-body">
                           Send an email to <a href="mailto:climb@mtu.edu">climb@mtu.edu</a>
                            <!-- <form action="/assets/php/reservation.php" method="post" id="group-reservation"
                                  class="sky-form sky-changes-3">
                                <fieldset>
                                    <section>
                                        <label class="input">
                                            <i class="icon-prepend fa fa-user"></i>
                                            <input type="text" name="name" placeholder="Name">
                                        </label>
                                    </section>
                                    <section>
                                        <label class="input">
                                            <i class="icon-prepend fa fa-user"></i>
                                            <input type="text" name="organization" placeholder="Organization">
                                        </label>
                                    </section>
                                    <section>
                                        <label class="input">
                                            <i class="icon-prepend fa fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Email">
                                        </label>
                                    </section>
                                    <section>
                                        <label class="input">
                                            <i class="icon-prepend fa fa-phone"></i>
                                            <input type="tel" name="phonenumber" id="phone"
                                                   placeholder="Phone Number">
                                        </label>
                                    </section>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="input input-append date form_datetime">
                                                    <i class="icon-prepend fa fa-calendar"></i>
                                                    <input size="16" type="text" name="date" value=""
                                                           placeholder="Desired Climbing Date" readonly>
                                                    <span class="add-on"><i class="icon-th"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="input">
                                                    <i class="icon-prepend fa fa-clock-o"></i>
                                                    <input type="number" min="0" max="4" name="length"
                                                           placeholder="Climbing Time">
                                                </label>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <label class="input">
                                            <i class="icon-prepend fa fa-users"></i>
                                            <input type="number" min="0" name="groupsize" placeholder="Group Size">
                                        </label>
                                    </section>
                                    <section>
                                        <label class="textarea">
                                            <i class="icon-prepend fa fa-comment"></i>
                                                <textarea rows="4" name="message" id="message"
                                                          placeholder="Additional Info"></textarea>
                                        </label>
                                    </section>-->
<!--                                    <section>-->
<!--                                        <label class="label">Enter characters below:</label>-->
<!--                                        <label class="input input-captcha">-->
<!--                                            <img src="/assets/plugins/sky-forms-pro/skyforms/captcha/image.php?--><?php //echo time(); ?><!--" width="100" height="32" alt="Captcha image" />-->
<!--                                            <input type="text" maxlength="6" name="captcha" id="captcha">-->
<!--                                        </label>-->
<!--                                    </section>-->
<!--
                                </fieldset>


                                <footer>
												<div class="g-recaptcha" data-sitekey="6LfxgiwUAAAAAGTtC1oLbGEDRj1sZaJhp0_2P0Jj" data-callback="enableBtn"></div>
                                    <button type="submit" id="submit" class="btn-u">Submit Reservation</button>
                                </footer>

                                <div class="message">
                                    <i class="rounded-x fa fa-check"></i>
                                    <p>Your reservation was submitted!</p>
                                </div>

                            </form> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="headline"><h3>SDC Availability</h3></div>
                <p>
                    The climbing wall can only be reserved during the hours that the SDC Multipurpose is open, unless
                    prior arrangements have been made with the SDC. All groups desiring to climb outside of normal
                    multipurpose room hours will need to contact the SDC office to make arrangements to use the
                    multipurpose room.
                </p>
            </div>
        </div>
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
<script type="text/javascript" src="/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="/assets/js/app.js"></script>
<script type="text/javascript" src="/assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript" src="/assets/js/subscribe.js"></script>
<script type="text/javascript" src="/assets/js/plugins/form-sliders.js"></script>
<script type="text/javascript" src="/assets/js/plugins/masking.js"></script>
<script type="text/javascript" src="/assets/js/pages/page_group.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init();
        StyleSwitcher.initStyleSwitcher();
        FooterSubscribe.initFooterSubscribe();
        PageGroupForm.initPageGroupForm();
        FormSliders.initFormSliders();
        Masking.initMasking();
    });
	 document.getElementById("submit").disabled = true;
	 function enableBtn(){
		document.getElementById("submit").disabled = false;
	 };
</script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        autoclose: "true",
        format: "MM dd, yyyy - hh:00",
        minView: "1",
        maxView: "3",
        showMeridian: "true",
        startDate: "2018-04-1 12:00",
        endDate: "2100-01-1 12:00",
    });
</script>
</body>
</html>