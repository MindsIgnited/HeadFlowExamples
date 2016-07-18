<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/*** Make sure we don't replace the Joomla __autoload funciton ***/

if (function_exists('__autoload')) spl_autoload_register( '__autoload' );

// Bootstrap application
require_once JPATH_BASE.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_hfcontact'.DIRECTORY_SEPARATOR.'Bootstrap.php';

$request = new \slinks\core\controller\Request();

$request->setActionPath('ContactFormAction_display');

$request->setParameters(new \slinks\core\DependencyInjection\ParameterBag\ParameterBag($_REQUEST));

echo \slinks\Slinks::getInstance()->getService('slinksActionManager')->handle($request);