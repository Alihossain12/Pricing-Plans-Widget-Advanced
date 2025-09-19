<?php 

// Class 1

// function hook_javascript() {
//     echo "Hello World from WP Head";
// }
// add_action('wp_head', 'hook_javascript');



// function mak_core_init(){
//     echo "Hello World from Plugin Loaded";
// }

// add_action('plugins_loaded', 'mak_core_init');

// add_filter( 'the_content', 'change_content', 10, 1 );
// function change_content ( $content ) {
//     global $post;
//     if( $post->ID == 9 ) {
//         $content = '<h2 style="color:red;">This is changed content for post id 9</h2>';
//     }
//     return $content;
// }



// Class 2

add_filter( 'the_content', 'add_content', 10 );

function add_content( $content ) {
    return $content . '<p style="color:blue;">This is appended content.</p>';
}


add_filter( 'the_content', 'add_content_2', -1 );

function add_content_2( $content ) {
    return $content . '<p style="color:blue;">This is appended content 2.</p>';
}




/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page() {
    
	add_menu_page(
		__( 'MAK Core', 'textdomain' ),
		'MAK Core',
		'manage_options',
		'make_core_view',
		'page_view',
		plugins_url( 'myplugin/images/icon.png' ),
		6
	);

    add_submenu_page(
        'make_core_view',
        __( 'Books Shortcode Reference', 'textdomain' ),
        __( 'Shortcode Reference', 'textdomain' ),
        'manage_options',
        'books-shortcode-ref',
        'subpage_view'
    );
}

add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );


function page_view(){
    ?>
    <div class="wrap">
        <h1>MAK Core Plugin Page</h1>
        <p>This is a custom menu page added by the MAK Core plugin.</p>
    <?php 
}

function subpage_view(){
    ?>
    <div class="wrap">
        <h1>Books Shortcode Reference</h1>
        <p>This is a custom submenu page added by the MAK Core plugin.</p>
    <?php 
}