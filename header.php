<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<a href="<?php bloginfo('url'); ?>"><h2><?php bloginfo('name'); ?></h2></a>
	<?php wp_nav_menu(); ?>
</header>

<section class="content">
	