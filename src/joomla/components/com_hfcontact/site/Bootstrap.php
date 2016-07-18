<?php

$rootDir = __DIR__ ;

// init Slinks
require_once($rootDir.DIRECTORY_SEPARATOR.'dependencies'.DIRECTORY_SEPARATOR.'slinks'.DIRECTORY_SEPARATOR.'Slinks.php');

\slinks\Slinks::getInstance();

$loader = new \slinks\common\UniversalClassLoader();
$loader->registerNamespaces(array(
    'hf'         =>  $rootDir
));

$loader->register();

// initalize our container.  
\slinks\Slinks::getInstance()->setDebugEnabled(false);
\slinks\Slinks::getInstance()->setCacheDirectory($rootDir.DIRECTORY_SEPARATOR.'cache');
\slinks\Slinks::getInstance()->initialize($rootDir.DIRECTORY_SEPARATOR.'services.xml',array('root.dir'=>$rootDir));
