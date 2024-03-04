<?php get_header(); ?>

<!-- <div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'text-domain' ); ?></h1>
            </header>

            <div class="page-content">
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'text-domain' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>
    </main>
</div> -->

<div class="background"> 
<img class="hero_404" src="<?php echo get_template_directory_uri(); ?>/assets/photos/404_hero.png" alt="hero">

<div class="content_404">

        <div class="three">
           <h1><?php _e( '4' );?></h1>
           <img class="image_404" src="<?php echo get_template_directory_uri(); ?>/assets/photos/image_404.png" alt="img">
           <h1><?php _e( '4' );?></h1>
        </div>

        <div class="four">
        <p><?php _e( 'Whoops! It looks like you are lost in space' ); ?></p>
        </div>
        <div class="five">
        
        <a class="wp-block-button__link wp-element-button" href="<?php echo get_home_url(); ?>">
        BACK TO HOME
        </a>
    
        </div>

    <div class="six">

    </div>
    <div class="seven">

    </div>
</div>
</div>

</div>

<?php get_footer(); ?>
