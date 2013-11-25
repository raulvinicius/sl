<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <?php $tUrl = get_bloginfo("template_url"); ?>

    <?php require( "frontend/category.php" ) ?>

<?php else : ?>

	<?php get_header(); ?>        

	<h2>categoria</h2>

	<?php get_footer(); ?>

<?php endif; ?>