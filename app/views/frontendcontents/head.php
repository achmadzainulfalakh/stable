<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sarana Lintas Data</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.png">
<!--<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico" />-->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
<meta name="description" content="<?php echo $this->settings_model->get_options('admin_descrip') ?>">
<meta name="keywords" content="<?php echo $this->settings_model->get_options('admin_keyword') ?>">
<meta name="author" content="<?php echo $this->settings_model->get_options('admin_name') //mendapatkan nama admin ?>">

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo  $this->config->item('cdn'); ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo  $this->config->item('cdn'); ?>font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/contact-form.css">

	<!-- jQuery -->
    <script type="text/javascript" src="<?php echo  $this->config->item('cdn'); ?>bower_components/jquery/dist/jquery.min.js"></script>

	<!-- jQuery minify with Bootstrap -->
	<!--<script type="text/javascript" src="<?php //echo  $this->config->item('cdn'); ?>ja/minify/minify_jquery_bootstrap.min.js"></script>-->
	<!-- Shortcode js -->
	<script type="text/javascript" src="<?php echo  $this->config->item('cdn'); ?>js/shortcode/src/Shortcode.js"></script>
	<!-- Bootstrap js -->
	<script type="text/javascript" src="<?php echo  $this->config->item('cdn'); ?>js/bootstrap.min.js" ></script>
	

<?php /*<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->*/?>
</head>
<body>