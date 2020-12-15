<?php

class pluginLightbox extends Plugin {

	public function form()
	{
		global $L;

		$html  = '<div>';
		$html .= $L->get('there-are-no-settings-for-this-plugin');
		$html .= '</div>';

		return $html;
	}

	public function siteHead(){

		$html  = '<link href="'.HTML_PATH_PLUGINS.'lightbox/css/lightbox.css" rel="stylesheet">';
		return $html;

    }

 	public function siteBodyEnd()
 	{

 		$html  = PHP_EOL.'<script src="'.HTML_PATH_PLUGINS.'lightbox/js/lightbox.js"></script>'.PHP_EOL;
 		return $html;
	}

}
