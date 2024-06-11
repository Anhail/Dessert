<?php

/**
 * Render homepage sections.
 */
function bakery_confectionery_homepage_sections() {
	$homepage_sections = array_keys( bakery_confectionery_get_homepage_sections() );

	foreach ( $homepage_sections as $section ) {
		require get_template_directory() . '/sections/' . $section . '.php';
	}
}