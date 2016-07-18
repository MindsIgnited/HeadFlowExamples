<?php



// add needed stuff to head
class HFToolTip{

	public static function render(array $params){
		
		$params = array_merge(array('icon' =>'','title'=>'','content'=>'','tooltiptargetpos'=>'leftBottom','hidedelay'=>'2000'),$params);
	
		$doc =& JFactory::getDocument();
		
		self::addBaseScripts($doc);
	
		$doc->addScriptDeclaration(self::getScriptDefinition($params));
	}
	
	
	private static function addBaseScripts(&$doc){
		$modPath =  JURI::base() .'/modules/mod_hftooltip';
		$jsPath = $modPath.'/javascript/';
		
		$doc->addStyleSheet($modPath.'/style/jquery.jscrollpane.css');
		$doc->addStyleSheet($modPath.'/style/hftooltip.css');
		
		
		// added before scriptaculous so we can turn on no conflict mode.
		$doc->addScript($jsPath.'jquery-1.4.4.min.js');
		$doc->addScript($jsPath.'jquery.qtip-1.0.0-rc3.min.js');
		$doc->addScript($jsPath.'jquery.mousewheel.js');
		$doc->addScript($jsPath.'jquery.jscrollpane.min.js');
		$doc->addScript($jsPath.'hftooltip.js');
		
		
	} 
	
	
	private static function getDomTemplate(array $params){
		$hasIcon = $params['icon'] !== '';
		if($hasIcon){
			$imageinfo = getimagesize(JPATH_ROOT.'/images/tooltipicons/'.$params['icon']);
		}
		
		return  '<div>'.
		        	'<div class="tooltip-header">'.
						($hasIcon ? 				
						'<div class="tooltip-icon">'.
			    			'<img src="images/tooltipicons/'.$params['icon'].'" '.($imageinfo !== FALSE ? $imageinfo[3] :'').' />'.
						'</div>'
						: '').
						'<div>'.
							'<div class="tooltip-title">'.
								$params['title'].
							'</div>'.
						'</div>'.
					'</div>'.
			    	'<div class="tooltip-separator"></div>'.
			    	'<div class="tooltip-content">'.
						'<div>'.
							htmlspecialchars($params['content']).
						'</div>'.
					'</div>'.
				'</div>';
	}
	
	
	private static function getScriptDefinition(array $params){
		$tooltipPos = null;
		switch ($params['tooltiptargetpos']){
			case 'leftTop':
				$tooltipPos = 'topRight';
				break;
			case 'leftBottom':
				$tooltipPos = 'bottomRight';
				break;
			case 'rightTop':
				$tooltipPos = 'topLeft';
				break;
			case 'rightBottom':
				$tooltipPos = 'bottomLeft';
				break;		
		}
		
		return "jQuery(document).ready(function(jQ){\n".
				"if(jQ('".$params['targetselector']."').length > 0){".
					"jQ('".$params['targetselector']."').qtip({".
					   "content: {prerender:false, text: jQ(".json_encode(self::getDomTemplate($params)).")},".
					   "show: { when: 'mouseover', ".
			                   "solo: true,".
					           "effect: { type: 'fade' } ".
					         "},".
					   "hide: { when: 'mouseout',".
						       "delay: ".$params['hidedelay'].", ".
						       "fixed: true,".
						       "effect: { type: 'fade' } ".
						     "},".
					   "position: {".
					      "corner: {".
					         "target: '".$params['tooltiptargetpos']."',".
					         "tooltip: '".$tooltipPos."'".
					      "}".
						"},".
						"style: { ".
						 	"name: 'golar',".
			   				"classes: {tooltip : 'qtip-".$params['tooltiptargetpos']."'}".
						"},".
						"api: {onShow : function(){".
							"var children = this.elements.content.find('.tooltip-content');".
							"children.jScrollPane();".
						"}}".
					"});".
		         "}".
		 "});\n";
	}

}