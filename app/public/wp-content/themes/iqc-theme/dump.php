<?php
add_action('init', function() {
    global $wpdb;
    $results = $wpdb->get_results("SELECT post_name, post_title, post_type FROM wp_posts WHERE post_title LIKE '%ISO%' AND post_status = 'publish'");
    $out = '';
    foreach($results as $r) {
        $out .= $r->post_type . ' | ' . $r->post_name . ' -> ' . $r->post_title . "\n";
    }
    file_put_contents(ABSPATH . 'slugs.txt', $out);
});
