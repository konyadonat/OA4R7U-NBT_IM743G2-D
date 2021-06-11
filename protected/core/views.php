<?php


function print_menu($menu, $return_html = false) {
	$menuString = '';

	$menuString .= '<ul class="nav nav-tabs">';
	foreach ($menu as &$menuItem) {
		$menuString = $menuString.'<li class="nav-item"><a class="nav-link" href="'.$menuItem['href'].'" '. (array_key_exists('extra',$menuItem) ? generate_attributes($menuItem['extra']) : '').'>'.$menuItem['title'].'</a>';
		if (array_key_exists('childs', $menuItem) && !empty($menuItem['childs'])){
			print_submenu($menuItem['childs'], $menuString);
		}
		$menuString .= '</li>';
	}
	$menuString .= '</ul>';
	if($return_html)
		return $menuString;
	else
		print $menuString;
	

}

function print_submenu(&$menu, &$menuString){
	$menuString .='<ul class ="nav nav-pills">';
	$vangyermek = false;
	foreach ($menu as &$menuItem) {
		$vangyermek = false;
		if (array_key_exists('childs', $menuItem) && !empty($menuItem['childs'])){
			$vangyermek = true;
		}

		$menuString = $menuString.'<li '.($vangyermek? 'class = "parent"':'').'><a href="'.$menuItem['href'].'" '.(array_key_exists('extra',$menuItem) ? generate_attributes($menuItem['extra']) : '').'>'.$menuItem['title'].'</a>';
		if($vangyermek){
			print_submenu($menuItem['childs'], $menuString);
		}
		$menuString .= '</li>';
	}
	$menuString .= '</ul>';
}
function generate_attributes($kulcs_ertek_par){
	$tagString = '';
	foreach ($kulcs_ertek_par as $key => $value) {
		$tagString.= $key.'="'.$value.'" ';
	}
	return $tagString;
}
