<?php
class TickerDAO {
    
    private $pdo = null;
    private $debug = false;
    
    public function __construct() {
        
    }
    
    public function getTotalBottleCount(){
        if(!$this->debug){
            $conn = $this->getConnection();
            $sql = 'select sum(p_s_quanti*105) as collected from ae.history where p_i_color = "ADM" and p_i_number = "P/TLGN"';
            $result = $conn->query($sql);
            $row = $result->fetch(PDO::FETCH_ASSOC);

            return $row['collected'];
        }else{
            return 105;
        }        
    }
    
    
    public function getCustomerTotals(){
        $customers = array();
        $conn = $this->getConnection();
        $sql = 'select sum(p_s_quanti*105) as collected, cm.c_name from ae.history left join (select c_name,c_number from cmaster group by c_number) cm on p_c_nbr = cm.c_number where p_i_color = "ADM" and p_i_number = "P/TLGN" group by p_c_nbr';
        foreach ($conn->query($sql) as $row) {
            $customers[] = new Customer($row['c_name'], "", $row['collected']);
        }
        return $customers;
    }
    
    
    private function getConnection(){
        if($this->pdo == null){
            $this->pdo = new PDO("mysql:dbname=ae;host=192.168.1.240", "modae", "poiuytrewq");
        }
        return $this->pdo;
    }
    
    
}

class Customer {
    
    public function __construct($name,$code,$count) {
        $this->name = $name;
        $this->code = $code;
        $this->count = $count;
    }
    
    public $name;
    
    public $code;
    
    public $count;
    
}
