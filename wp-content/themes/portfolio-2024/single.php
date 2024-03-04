<?php get_header(); ?>

<div>
    <h2><?php the_title(); ?></h2>
    <div>Price: <?php echo get_field('price'); ?></div>
    <div>Description: <?php echo get_field('product_name'); ?></div>
    <div>Image: <?php $image = get_field('product_image'); if ($image) : ?><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"><?php endif; ?></div>
</div>
<?php get_footer(); ?>