<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php get_header(); ?>

</head>
<body>

<?php the_content() ?>

<?php get_footer(); ?>
</body>
</html>