<?php

class Ticker {
    
    private $twig;
    private $tickerDAO;
    
    public function __construct() {
        require_once __DIR__.DS.'TickerDAO.php';
        require_once __DIR__.DS.'Twig'.DS.'Autoloader.php';
        Twig_Autoloader::register();

        $loader = new Twig_Loader_Filesystem(__DIR__.DS.'templates');
        $this->twig = new Twig_Environment($loader, array(
          'cache' => __DIR__ . DS . 'cache',
        ));
        $this->tickerDAO = new TickerDAO();
    }
    
    public function renderTicker(){
        $doc = & \JFactory::getDocument();
        $modPath =  JURI::base() .'/modules/mod_ticker';
        $jsPath = $modPath.'/js/';
        $doc->addScript($jsPath.'flipcounter.js');  
        $doc->addStyleSheet($modPath.'/style/counter.css');
        
        try {
            $count = $this->tickerDAO->getTotalBottleCount();
            
            $start = $count - 20;
            if($start < 0){
                $start = 0;
            }

            $template = $this->twig->loadTemplate('ticker.twig');

            echo $template->render(array('tickerId' => 'tickerx','startValue'=>$start,'endValue' => $count));
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        } 
    }
    
    public function renderTable(){
        $doc = & \JFactory::getDocument();
        $modPath =  JURI::base() .'/modules/mod_ticker';
        $doc->addStyleSheet($modPath.'/style/ticker.css');
         
        try {
            $customers = $this->tickerDAO->getCustomerTotals();
            $template = $this->twig->loadTemplate('tickerTable.twig');
            echo $template->render(array('customers' => $customers));
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        } 
    }
    
}

?>
