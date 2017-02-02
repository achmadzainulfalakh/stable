<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $this->settings_model->get_description() ?>">
    <meta name="author" content="<?php echo $this->settings_model->get_author() ?>">

    <title><?php echo $this->settings_model->get_title() ?><?php echo $this->settings_model->get_subtitle() ?></title>
	
	<!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo $this->settings_model->get_favicon() ?>"/>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."assets/admin" ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()."assets/admin" ?>/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()."assets/admin" ?>/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()."assets/admin" ?>/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url()."assets/admin" ?>/bower_components/jquery/dist/jquery.min.js"></script>
	
	<!-- CK editor js -->
	<script type="text/javascript" src="<?php echo base_url()."assets/ckeditor-full" ?>/ckeditor.js"></script>
	
	


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>