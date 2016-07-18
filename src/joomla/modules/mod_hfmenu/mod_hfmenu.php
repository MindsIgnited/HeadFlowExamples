<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


/*** Make sure we don't replace the Joomla __autoload funciton ***/

if (function_exists('__autoload')) spl_autoload_register( '__autoload' );

// Bootstrap application
require_once 'Bootstrap.php';

$args = $params->toArray();

$request = new \slinks\core\controller\Request();

$request->setActionPath('HfMenu_render');

$request->setParameters(new \slinks\core\DependencyInjection\ParameterBag\ParameterBag($args));


echo \slinks\Slinks::getInstance()->getService('slinksActionManager')->handle($request);