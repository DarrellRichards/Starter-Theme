<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<a href="<?php bloginfo('url'); ?>"><h2><?php bloginfo('name'); ?></h2></a>
	<?php wp_nav_menu(); ?>
</header>

<section class="content">
	