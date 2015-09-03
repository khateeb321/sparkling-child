<?php
	
	function register_second_menu() {
		register_nav_menu('Categories', __('Category Menu'));
	}

	add_action('init','register_second_menu');
?>