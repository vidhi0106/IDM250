


<header id="masthead" class="site-header">
<div class="site-branding">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/photos/logo.png" alt="Logo">
        </a>
        <?php wp_nav_menu([
            'theme_location' => 'left'
        ]); ?>
        
    </div>
    <nav id="site-navigation" class="main-navigation">
        <?php wp_nav_menu([
            'theme_location' => 'primary'
        ]); ?>
    </nav>

    <div class="modal">
    <div class="modal-content">
        <?php wp_nav_menu([
            'theme_location' => 'primary'
        ]); ?>
    </div>
</div>
    <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false">
        <span class="hamburger-icon">&#9776;</span>
        <span class="close-icon">&times;</span>
    </button>
</header>




</header>

