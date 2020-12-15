<?php
//Based on AMP.DEV html template
//author: Constantine - Evergarden
	if(!defined("BLUDIT")) { die("You seek for fresh air and peace of mind, Ivanov? I'm in the North, waiting for you."); }
	class AMPER extends Plugin {
	public function init(){
	// Custom fields initialization
	global $site;
	$userFields = $site->customFields() ?? '{}';
	if(!isset($userFields['_amper'])){
	$amper_json = json_decode('{"_amper": {"type": "bool","label": "AMPER","tip": "Disable AMP pages for this content"}}', true);
	$amper_final = json_encode(array_merge($userFields, $amper_json));
	$site->set(array('customFields'=>$amper_final));
	}
	}
	public function beforeSiteLoad(){
	global $url, $page, $site;
	if(isset($_GET["amp"])){
		if($url->whereAmI() == "page" && !$url->notFound() && $page->custom('_amper') !== true){
			include(__DIR__ . DS . "php" . DS . "amper.php");
	}
	}
	}
	public function siteHead()
	{
	global $page, $url;
	if($url->whereAmI() == "page" && !$url->notFound() && $page->custom('_amper') !== true){
		return '<link href="' . $page->permalink() . '?amp" rel="amphtml" />' . PHP_EOL;
	}
	}
}
