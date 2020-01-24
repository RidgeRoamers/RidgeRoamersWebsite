<!-- Background Image
<div class = "container" style="position:relative;">
    <img class = "center-block overlay" src = "images/groupphoto.jpg"></img>
</div>
-->
<!-- Begin Navbar -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124567457-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124567457-1');
</script>


<div class="header">
    <div class="container">
        <!-- Logo -->
        <a class="logo" href="/index.php">
            <h1>Ridge Roamers Climbing Club</h1>
        </a>
        <!-- End Logo -->

        <!-- Get grouping for mobile display -->
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-responsive-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
        </button>
        <!-- End Toggle -->
    </div><!-- End Container -->

    <div class="collapse navbar-collapse navbar-responsive-collapse">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="<?php if ($currentPage == 'home') {
                    echo 'active';
                } ?>"><a href="/"><span>Home</span></a></li>
                <li class="<?php if ($currentPage == 'climbing wall') {
                    echo 'active';
                } ?>"><a href="/climbing-wall.php"><span>Climbing Wall</span></a></li>
                <li class="<?php if ($currentPage == 'groups') {
                    echo 'active';
                } ?>"><a href="/groups.php"><span>Groups</span></a></li>
                <li class="<?php if ($currentPage == 'events') {
                    echo 'active';
                } ?>"><a href="/events.php"><span>Events</span></a></li>
                <li class="<?php if ($currentPage == 'gallery') {
                    echo 'active';
                } ?>"><a href="/gallery.php"><span>Gallery</span></a></li>
                <li class="<?php if ($currentPage == 'waiver') {
                    echo 'active';
                } ?>"><a href="/waiver.php"><span>Waiver & Policies</span></a></li>
                <li class="<?php if ($currentPage == 'about') {
                    echo 'active';
                } ?>"><a href="/about.php"><span>About Us</span></a></li>
                <li class="<?php if ($currentPage == 'contact us') {
                    echo 'active';
                } ?>"><a href="/contact-us.php"><span>Contact Us</span></a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<!-- End Navbar -->
