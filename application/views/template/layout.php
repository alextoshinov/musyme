<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <link rel="stylesheet" href="<?php echo URL::base(); ?>assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo URL::base(); ?>assets/css/colorbox.css" />
        <link rel="stylesheet" href="<?php echo URL::base(); ?>assets/css/styles.css"  />
        <script src="<?php echo URL::base(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="site-wrap">
            <?php echo View::factory('template/header');?>
            <div id="main-content">
                <div id="scroller">
                    <?php echo $content;?>
                </div>
            </div>
            <?php echo View::factory('template/footer');?>            
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo URL::base(); ?>assets/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="<?php echo URL::base(); ?>assets/js/jquery.colorbox-min.js"></script>
        <script src="<?php echo URL::base(); ?>assets/js/iscroll.js"></script>
        <script src="<?php echo URL::base(); ?>assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
