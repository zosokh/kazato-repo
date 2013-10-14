<?php
$post = $wp_query->post;
if ( in_category('3') ) {
include(TEMPLATEPATH.'/single_news.php');
} elseif ( in_category('2') ) {
include(TEMPLATEPATH.'/single_live.php');
} else {
include(TEMPLATEPATH.'/single_sub.php');
}
?>



