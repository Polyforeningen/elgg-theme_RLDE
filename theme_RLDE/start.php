<?php

register_elgg_event_handler('init','system','theme_RLDE_init');
 
function theme_RLDE_init() {
    elgg_unregister_menu_item('topbar', 'elgg_logo');
// HERE IS WHERE WE TWEAK THE LOGO
// 	$logo_url = elgg_get_site_url() . "_graphics/elgg_toolbar_logo.gif";
//	elgg_register_menu_item('topbar', array(
//		'name' => 'elgg_logo',
//		'href' => 'http://elgg.polyforeningen.org/',
//		'text' => "<img src=\"$logo_url\" alt=\"Elgg logo\" width=\"38\" height=\"20\" />",
//               'text' => "<img src=\"_graphics/polyamory.32x32.gif\" alt=\"Polyföreningen logo\" width=\"20\" height=\"20\" />",
//		'priority' => 1,
//		'link_class' => 'elgg-topbar-logo',
//	));
//

    elgg_extend_view('css/elements/layout', 'theme_RLDE/css/elements/layout');
}


?>
