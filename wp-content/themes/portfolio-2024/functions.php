<?php

function theme_scripts_and_styles()
{
    
    wp_enqueue_script('idm-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer' => true]);

    wp_enqueue_style('idm-main-style', get_template_directory_uri() . '/dist/styles/main.css');
}

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

function register_theme_menus()
{
    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
        '404-menu' => '404 Menu',
        'left' => 'Left Menu'
    ]);
}
add_action('init', 'register_theme_menus');

/**
 * Get menu items as a flat array to use for custom markup
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @param string $menu_name - Name of the registered menu id
 * @return array $menu_items - Array of WP_Post objects.
 */
function get_theme_menu($menu_name)
{
    // Get menu items as a flat array
    $locations = get_nav_menu_locations();
    // If menu doesn't exist, let's just return an empty array
    if (!isset($locations[$menu_name])) {
        return [];
    }
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);

    // Iterate through the menu items to append classes as a string and other attributes
    foreach ($menu_items as &$item) {
        // Convert classes array to a space-separated string
        $item->classes = !empty($item->classes) ? implode(' ', array_filter($item->classes)) : '';

        // Ensure other standard attributes are set
        $item->target = !empty($item->target) ? $item->target : '';
        $item->title = !empty($item->attr_title) ? $item->attr_title : ''; // Use attr_title for the HTML title attribute
        $item->xfn = !empty($item->xfn) ? $item->xfn : '';
    }
    unset($item); // Break the reference with the last item
    return $menu_items;
}

// Enable featured images
add_theme_support('post-thumbnails');

// enable excerpt
add_post_type_support('page', 'excerpt');

// create custom post type called shop item
function create_custom_post_type()
{
    $post_type_name = 'horoscope';
    $post_type_options = [
        'labels' => [
            'name' => __('Horoscopes'),
            'singular_name' => __('Horoscope'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => ['slug' => 'shop_item'],
        'show_in_rest' => true,

    ];

    register_post_type($post_type_name, $post_type_options);

    $post_type_name = 'menu';
    $post_type_options = [
        'labels' => [
            'name' => __('Menu'),
            'singular_name' => __('Menu'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => ['slug' => 'menu'],
        'show_in_rest' => true,

    ];

    register_post_type($post_type_name, $post_type_options);
}
add_action('init', 'create_custom_post_type');

function get_featured_image_data($post_id)
{
    // Ensure there is a post thumbnail before proceeding
    if (has_post_thumbnail($post_id)) {
        // Get the ID of the post's featured image
        $post_thumbnail_id = get_post_thumbnail_id($post_id);

        // Get the URL of the featured image
        $featured_image_data = wp_get_attachment_image_src($post_thumbnail_id, 'full'); // 'full' can be changed to any registered image size

        // Get the alt text of the featured image
        $featured_image_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);

        // Return an array with the image URL and alt text
        return [
            'url' => $featured_image_data[0],
            'alt' => $featured_image_alt,
        ];
    }

    // Return false if there is no post thumbnail
    return false;
}

function custom_theme_setup() {
    // Register custom post type for products
    register_post_type('product', array(
        'labels' => array(
            'name' => __('Products'),
            'singular_name' => __('Product')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
    ));
}
add_action('init', 'custom_theme_setup');