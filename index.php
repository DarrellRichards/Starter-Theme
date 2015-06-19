<?php 
	$context = Timber::get_context();
	$context['posts'] = Timber::get_posts();
	$about['post'] = new TimberPost(8);
	Timber::render('index.twig', $context, $about);
?>

