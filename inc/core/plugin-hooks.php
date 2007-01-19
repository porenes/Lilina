<?php
/******************************************
		Lilina: Simple PHP Aggregator
File:		plugins-hooks.php
Purpose:	Plugin hooks
Notes:		
Functions:	
Style:		**EACH TAB IS 4 SPACES**
Licensed under the GNU General Public License
See LICENSE.txt to view the license
******************************************/
defined('LILINA') or die('Restricted access');
function before_parse(){
	//Get list of plugins here:
	$plugins = get_hooked('hook_before_parse');
	for($plugin = 0; $plugin < count($plugins); $plugin++) {
		$plugin_function = $plugins[$plugin]['func'];
		$plugin_function();
	}
}
function before_sanitize() {

}
function after_sanitize() {

}
function call_hooked($hook, $pos){
	//Get list of plugins hooked here...
	$plugins = get_hooked($hook, $pos);
	for($plugin = 0; $plugin < count($plugins); $plugin++) {
		$plugin_function = $plugins[$plugin]['func'];
		$plugin_function();
	}
}
?>