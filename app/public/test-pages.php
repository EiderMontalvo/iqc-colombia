<?php
require_once('wp-load.php');
$pages = get_pages();
foreach($pages as $page) {
    echo "ID: {$page->ID} | Title: {$page->post_title} | Slug: {$page->post_name}\n";
}
?>
