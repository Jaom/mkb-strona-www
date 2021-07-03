<?php
	
	// Catch language
	$english = isset($_GET['en']);
	$LANG = $english?'en':'pl';
	$t = time();
	
	// Break languages
	function bilingual($str) {
	global $LANG;
	$p = explode('|',$str);
	if(($LANG == 'en') && ($p[1])) return $p[1];
	else return $p[0];
	}