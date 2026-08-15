<?php
require 'wp-load.php';
$posts = get_posts(['post_type' => 'any', 'posts_per_page' => -1]);
foreach($posts as $p) {
    echo $p->post_name . ' -> ' . $p->post_title . "\n";
}
