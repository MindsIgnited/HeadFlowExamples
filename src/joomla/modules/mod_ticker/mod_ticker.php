<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

if (function_exists('__autoload')) spl_autoload_register( '__autoload' );

include_once JPATH_ROOT.DS.'modules'.DS.'mod_ticker'.DS.'Ticker.php';

$ticker = new Ticker();

if($params->get('tickerOrTable') == 0){
   $ticker->renderTicker();
}else if($params->get('tickerOrTable') == 1){
    $ticker->renderTable();
}
