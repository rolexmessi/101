<?php
/*
/*-----------------------------------------------*/
/* KENTOOZ THEMES FUNCTION
/* Website    : http://www.kentooz.com
/* The Author : Gian Mokhammad Ramadhan (http://www.gianmr.com)
/* Twitter    : http://www.twitter.com/g14nnakal 
/* Facebook   : http://www.facebook.com/gianmr
/*-----------------------------------------------*/

/*
* Register and includes files widget
*/
function ktz_widget_init() {
	/*
	* Includes Files for widget
	*/
	include_once(ktz_dir . '/includes/widget/banner_widget.php');
	include_once(ktz_dir . '/includes/widget/facebook_widget.php');
	include_once(ktz_dir . '/includes/widget/feedburner_widget.php');
	include_once(ktz_dir . '/includes/widget/popular_posts_widget.php');
	include_once(ktz_dir . '/includes/widget/recent_posts_widget.php');
	include_once(ktz_dir . '/includes/widget/trending_tags_border_widget.php');
	/*
	* Register widget classes
	*/
	register_widget('ktz_facebook');
	register_widget('ktz_banner');
	register_widget('ktz_recent_posts');
	register_widget('ktz_popular_posts');
	register_widget('ktz_tags_border_posts');
	register_widget('ktz_feedburner');
}

?>