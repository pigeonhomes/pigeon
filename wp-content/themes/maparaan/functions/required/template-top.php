<?php

$padd_guid = '';
function padd_hooked_theme_credits() {
	global $padd_guid;
?>
<p class="annotation">Designed by <a href="http://mmohut.com" title="MMORPG" target="_blank">MMORPG</a>. In collaboration with <a href="http://www.hostv.com" title="VPS Hosting" target="_blank">VPS Hosting</a>, <a href="http://www.cirtexhosting.com/video-hosting.shtml" title="Video Hosting" target="_blank">Video Hosting</a> and <a href="http://www.cirtexhosting.com/shared.shtml" title="Shared Hosting" target="_blank">Shared Hosting</a>.</p>
<?php
	$padd_guid = '52dfc4b4-eb04-4588-a331-38611858c43f';
}
add_action('padd_theme_credits','padd_hooked_theme_credits');

ob_start(); 
