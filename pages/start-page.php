<?php

function pwp_plugins_start_page() {
	if ( !current_user_can( 'edit_posts' ) ) {
		wp_die( PWP_CONTROL_NO_PERMISSION_TEXT );
	}

	?>
	<div class="pwp wrap">

		<img class="icon" alt="pwp-icon" src="<?php echo PWP_CONTROL_PLUGIN_URL . 'images/star32.png'; ?>" />
  	<h2>Prémium WordPress bővítmények</h2>
  
		<div class="clearline"></div>
		
  	<div class="section-block">

	  	<h2>Prémium WordPress bővítmények bemutatása</h2>
	  	<p>A Prémium WordPress bővítmények célja, hogy a lehető leghasznosabb funkciókkal bővítse a WordPress alaprendszert. Minden bővítmény egy bizonyos funkciót lát el. Olyan funkciót, ami minden felhasználónak hasznos lehet, mint például a Google Analytics beállítása vagy a közösségi megosztás lehetősége.</p>
	  	<p>A bővítmények folyamatosan bővülnek a saját tapasztalataink és a felhasználók visszajelzései alapján.</p>
	  	<p>A Prémium Wordpress bővítményeket a <a href="/wp-admin/plugins.php">Bővítmények menüpont</a> alatt lehet megtalálni és ott lehet aktiválni azokat, amikre szükség van.</p>

  	</div>

	</div>
	<?php
}
