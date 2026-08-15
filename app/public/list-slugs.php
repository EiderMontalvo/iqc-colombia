<?php
require_once('wp-load.php');
$query = new WP_Query(array('post_type' => 'certificacion', 'posts_per_page' => -1));
while($query->have_posts()){
    $query->the_post();
    global $post;
    echo "ID: " . get_the_ID() . " | Title: " . get_the_title() . " | Slug: " . $post->post_name . "\n";
}
wp_reset_postdata();
