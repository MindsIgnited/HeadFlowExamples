<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Import library dependencies
jimport('joomla.plugin.plugin');

class plgSystemTestlayout extends JPlugin{

	/**
	 * Constructor
	 *
	 * For php4 compatability we must not use the __constructor as a constructor for
	 * plugins because func_get_args ( void ) returns a copy of all passed arguments
	 * NOT references.  This causes problems with cross-referencing necessary for the
	 * observer design pattern.
	 */
	function plgSystemTestlayout(& $subject, $config){
		parent::__construct($subject, $config);

	}

	/**
	 * Plugin method with the same name as the event will be called automatically.
	 */
	function onAfterDispatch(){

		$app = &JFactory::getApplication();
 
		$document =& JFactory::getDocument();

		$doctype = $document->getType();

		// Only render for HTML output
		if ( $doctype !== 'html' ) { return; }

		jimport( 'joomla.application.module.helper' );
		$modules = JModuleHelper::getModules( 'top' );

		return true;
	}

}
?>
