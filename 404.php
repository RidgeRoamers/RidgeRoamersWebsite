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

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="/assets/css/pages/page_404_error.css">

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
    <!-- === Header === -->
    <?php $currentPage = '' ?> <!--Set the current active page variable -->
    <?php include("header.php") ?>
    <!-- /Header -->

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">404 Error</h1>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <!--Error Block-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-v1">
                    <span class="error-v1-title">404</span>
                    <span>Bolts not found!</span>
                    <p>The requested <i>climbing route</i> was not found. That’s all we know, consult a mountain guide!</p>
                    <a class="btn-u btn-bordered" href="/">Back Home</a>
                </div>
            </div>
        </div>
        <!--End Error Block-->
    </div>
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
<!-- JS Customization -->
<script type="text/javascript" src="/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="/assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
</body>
</html>