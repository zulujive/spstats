<?php
  include(dirname(__FILE__).'/config.php');
	if ($site_theme == 'purple') {
	  $background_color = '#3d204d';
		$navbar_color = '#320241';
		$profile_hover_color = '#9250b6';
		$article_color = '#320241';
		$article_hover_color = '#3d0e56';
		$info_color = '#1e0127';
		$image_border_color = '#0f0013';
	}
	if ($site_theme == 'red') {
    $background_color = '#4d2a20';
		$navbar_color = '#411802';
		$profile_hover_color = '#b66750';
		$article_color = '#411802';
		$article_hover_color = '#412002';
		$info_color = '#270e01';
		$image_border_color = '#130700';
	}
	if ($site_theme == 'green') {
    $background_color = '#204d26';
		$navbar_color = '#024113';
		$profile_hover_color = '#50b65e';
		$article_color = '#024113';
		$article_hover_color = '#024e20';
		$info_color = '#01270b';
		$image_border_color = '#001305';
	}
?>
