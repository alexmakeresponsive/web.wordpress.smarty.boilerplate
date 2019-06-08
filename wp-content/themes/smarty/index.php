<?php

$query = new WP_Query(array(
	'posts_per_page'   => 10,
));

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		$post_titles[]['title'] = get_the_title();
	}
} else {

}
wp_reset_postdata();

// s($post_titles);


$smarty->assign('name', 'Alex');
$smarty->assign('PostTitles', $post_titles);

$smarty->display('index.tpl');
