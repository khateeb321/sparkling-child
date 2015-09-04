<?php
	
	function register_second_menu() {
		register_nav_menu('Categories', __('Category Menu'));
	}

	add_action('init','register_second_menu');
?>


	<!--
	<nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
	  <div class="wrap">
	    <ul id="menu-secondary-navigation" class="menu genesis-nav-menu menu-primary">
	      <?php wp_nav_menu(array( 'theme_location' => 'Categories' )); ?>
	    </ul>
	  </div>
	</nav>
	-->