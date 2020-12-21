<?php
	/*
	@Package: Bludit
	@Plugin: Ribbon
	@Version: 2.0
	@Author: Fred K.
	@Realised: 27 July 2015
	@Updated: 16 June 2020
*/
class pluginRibbon extends Plugin {

	private $loadWhenController = array(
		'configure-plugin'
	);

	public function init()
	{
		$this->dbFields = array(
		    'type' => 'ribbon',
		    'title' => 'Fork me on Github',
		    'url' => 'https://github.com',
		    'display' => 'right',
		    'display2' => 'top',
		    'color' => 'EB593C',
		    'linkcolor' => 'FFFFFF'
			);
	}


	public function adminHead()
	{
		global $layout;
		$pluginPath = $this->htmlPath();

		$html  = '';

		if(in_array($layout['controller'], $this->loadWhenController))
		{
			$html .= '<script src="' .$pluginPath. 'libs/jscolor/jscolor.js"></script>'.PHP_EOL;
		}

		return $html;
	}

	public function siteHead()
	{
		$html = ''.PHP_EOL;

	    if ($this->getValue('type') == 'ribbon')
	     {
	      $html .= '<style type="text/css" media="screen">
	      .ribbon{ background-color: #' .$this->getValue('color'). '; z-index:1000;padding:3px;position:fixed;top:2em;' .$this->getValue('display'). ':-3em; -moz-transform:rotate(' .($this->getValue('display') =='left'? '-45':'45'). 'deg); -webkit-transform:rotate(' .($this->getValue('display')=='left' ? '-45':'45'). 'deg); -moz-box-shadow:0 0 1em #888; -webkit-box-shadow:0 0 1em #888}
	      .ribbon a{ border:1px dotted rgba(255,255,255,1); color:#' .$this->getValue('linkcolor'). '; display:block; font:normal 81.25% "Helvetiva Neue",Helvetica,Arial,sans-serif; margin:0.05em 0 0.075em 0; padding:0.5em 3.5em; text-align:center; text-decoration:none;text-shadow:0 0 0.5em #333}
	      .ribbon a:hover{ opacity: 0.5}
	      </style>'.PHP_EOL;
	    } else {
	      $html .= '<style type="text/css" media="screen">
	        .stickybar{position:fixed;left:0;right:0;top:0;font-size:14px; font-weight:400; height:35px; line-height:35px; overflow:visible; text-align:center; width:100%; z-index:1000; border-bottom-width:3px; border-bottom-style:solid; font-family:Georgia,Times New Roman,Times,serif; color:#fff; border-bottom-color:#fff; margin:0; padding:0; background-color: #' .$this->getValue('color'). ';-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px;}
	         body {margin-top:35px !important}
	        .stickybar a, .stickybar a:link, .stickybar a:visited, .stickybar a:hover{color:#' .$this->getValue('linkcolor'). ';font-size:14px; text-decoration:none; border:none;  padding:0}
	        .stickybar a:hover{text-decoration:underline}
	        .stickybar a{color:#fff; display:block;padding-bottom: 8px; text-align:center; text-decoration:none;text-shadow:0 0 0.1em #000}
	        .stickybar a:hover{ opacity: 0.8}
	        </style>'.PHP_EOL;
	     }

	     return $html;
	}

	// Load js plugin in public theme
	public function siteBodyEnd()
	{
			$html  = '<div class="' .$this->getValue('type'). '">'.PHP_EOL;
            $html .= '<a href="' .$this->getValue('url'). '">' .$this->getValue('title'). '</a>'.PHP_EOL;
            $html .= '</div>'.PHP_EOL;

			return $html;
	}

	public function form()
	{
		global $L;

		$html  = '<div>';
		$html .= '<label for="type">'.$L->get('Display Type').'</label>';
        $html .= '<select name="type">';
        $typeOptions = array( 'ribbon'=> $L->get('Ribbon'), 'stickybar'=> $L->get('Stickybar') );
        foreach($typeOptions as $text=>$value)
            $html .= '<option value="'.$text.'"'.( ($this->getValue('type')===$text)?' selected="selected"':'').'>'.$value.'</option>';
        $html .= '</select>';
        $html .= '<div class="uk-form-help-block">'.$L->get('If stickybar is selected you can insert more text.').'</div>';
		$html .= '</div>';

        $html .= '<div>';
		$html .= '<label for="title">'.$L->get('Title').'</label>';
		$html .= '<input type="text" name="title" value="'.$this->getValue('title').'" required/>';
		$html .= '</div>';

        $html .= '<div>';
		$html .= '<label for="url">'.$L->get('Link').'</label>';
		$html .= '<input class="width-40" type="url" name="url" value="'.$this->getValue('url').'" required/>';
		$html .= '</div>';

        $html .= '<div>';
		$html .= '<label for="color">'.$L->get('Background color').'</label>';
		$html .= '<input class="color" type="text" name="color" value="'.$this->getValue('color').'" required/>';
		$html .= '</div>';

        $html .= '<div>';
		$html .= '<label for="linkcolor">'.$L->get('Link color').'</label>';
		$html .= '<input class="color" type="text" name="linkcolor" value="'.$this->getValue('linkcolor').'" required/>';
		$html .= '</div>';

		if ($this->getValue('type') == 'ribbon'){
			$html .= '<div>';
			$html .= '<label for="display">'.$L->get('Horizontal orientation').'</label>';
	        $html .= '<select name="display">';
	        $displayOptions = array( 'left'=> $L->get('Left'), 'right'=> $L->get('Right') );
	        foreach($displayOptions as $text=>$value)
	            $html .= '<option value="'.$text.'"'.( ($this->getValue('display')===$text)?' selected="selected"':'').'>'.$value.'</option>';
	        $html .= '</select>';
			$html .= '</div>';
		}
		return $html;
	}

}
