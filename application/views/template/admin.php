<!DOCTYPE HTML>
<html lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="description" content="A short phrase that describes the content of the page" />
<meta name="keywords" content="list of words, separated by, comma" />
<meta name="abstract" content="Short description of page" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo URL::base(); ?>favicon.ico">
<link rel="apple-touch-icon" href="<?php echo URL::base(); ?>touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL::base(); ?>touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL::base(); ?>touch-icon-iphone4.png" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<title><?php echo $title ?></title>
<?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
    var Base_URL = '<?php echo URL::base(); ?>';
    var lang = '<?php echo (isset($current_lang))?$current_lang:'en'; ?>';
</script>

</head>
<body>
<div id="wrapper">
<?php //include Kohana::find_file('views', 'adminheader'); ?>

<?php echo $content ?>
</div>
<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
</body>
</html>