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

    <!-- CSS Theme -->
    <link rel="stylesheet" href="/assets/css/theme-colors/dark-red.css" id="style_color">
    <link rel="stylesheet" href="/assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/assets/css/custom.css">

    <!-- Google reCaptchaV2 --->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="wrapper">
    <!-- === Header === -->
    <?php $currentPage = 'contact us' ?> <!--Set the current active page variable -->
    <?php include("header.php") ?>
    <!-- /Header -->

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Contact Us</h1>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <div class="headline"><h2>Contact Form</h2></div>
                <br>
               Send an email to <a href="mailto:climb@mtu.edu">climb@mtu.edu</a>
                <!-- <form action="/assets/php/contact-form.php" method="post" id="sky-form3" class="sky-form sky-changes-3">
                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label class="label">Name</label>
                                <label class="input">
                                    <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="name" id="name">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">E-mail</label>
                                <label class="input">
                                    <i class="icon-append fa fa-envelope-o"></i>
                                    <input type="email" name="email" id="email">
                                </label>
                            </section>
                        </div>

                        <section>
                            <label class="label">Subject</label>
                            <label class="input">
                                <i class="icon-append fa fa-tag"></i>
                                <input type="text" name="subject" id="subject">
                            </label>
                        </section>

                        <section>
                            <label class="label">Message</label>
                            <label class="textarea">
                                <i class="icon-append fa fa-comment"></i>
                                <textarea rows="4" name="message" id="message"></textarea>
                            </label>
                        </section> -->
                        <!--                        <section>-->
                        <!--                            <label class="label">Enter characters below:</label>-->
                        <!--                            <label class="input input-captcha">-->
                        <!--                                <img src="/assets/plugins/sky-forms-pro/skyforms/captcha/image.php?-->
                        <?php //echo time(); ?><!--" width="100" height="32" alt="Captcha image" />-->
                        <!--                                <input type="text" maxlength="6" name="captcha" id="captcha">-->
                        <!--                            </label>-->
                        <!--                        </section>-->
                        <!-- <section>
                            <label class="checkbox"><input type="checkbox" name="copy"><i></i>Send a copy to my e-mail
                                address</label>
                        </section>
                    </fieldset>

                    <footer>
                        <div>
                            <div class="g-recaptcha" data-sitekey="6LcogywUAAAAAIkku_lppHTvUUahRoaJ_TgKiZcl"
                                 data-callback="enableBtn"></div>
                            <button type="submit" id="submit" class="btn-u">Send message</button>
                        </div>
                    </footer>

                    <div class="message">
                        <i class="rounded-x fa fa-check"></i>
                        <p>Your message was successfully sent!</p>
                    </div>

                </form> -->
            </div><!--/col-md-9-->

            <div class="col-md-3">
                <!-- Contacts -->
                <div class="headline"><h2>Contacts</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>SDC Multi-purpose gym, Houghton, MI 49931</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>climb@mtu.edu</a></li>
                </ul>

                <!-- Business Hours -->
                <div class="headline"><h2>Climbing Hours</h2></div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong>Monday-Thursday:</strong> 7pm to 9pm</li>
                    <li><strong>Friday-Sunday:</strong> Closed</li>
                </ul>

                <!-- Why we are? -->
            </div><!--/col-md-3-->
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

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
<script type="text/javascript" src="/assets/js/pages/page_contact_advanced.js"></script>
<script type="text/javascript" src="/assets/js/subscribe.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init();
        StyleSwitcher.initStyleSwitcher();
        PageContactForm.initPageContactForm();
        FooterSubscribe.initFooterSubscribe();
    });
    document.getElementById("submit").disabled = true;

    function enableBtn() {
        document.getElementById("submit").disabled = false;
    }
</script>

<!--[if lt IE 9]>
<script src="/assets/plugins/respond.js"></script>
<script src="/assets/plugins/html5shiv.js"></script>
<script src="/assets/plugins/placeholder-IE-fixes.js"></script>
<script src="/assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
<![endif]-->
<!--[if lt IE 10]>
<script src="/assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->
</body>


</html>