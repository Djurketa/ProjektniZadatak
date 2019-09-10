<?php

require "../includes/config.php";

class Calculator{
	
	private $pdo;
	private $factor1;
	private $factor2;
	private $result;
	private $operation;
    
    public function __construct($pdo,$data){
        // Geting connection and data
    	$this->pdo=$pdo;
    	$this->factor1 = $data->factor1;
    	$this->factor2 = $data->factor2; 
        $this->operation = $data->operation;                                                       
    } 

    public function multiplay(){
        // Calculating
      	$this->result = $this->factor1 * $this->factor2;
    }

    public function save(){
        // Making ana executing query
    	$query = "INSERT INTO `data_table` VALUES('',?,?,?,?,?)" ;
    	$stmt = $this->pdo->prepare($query);
    	$stmt->execute([$this->factor1,
                        $this->factor2,
                        $this->operation,
                        $this->result,
                        date('Y-m-d G:i:s')] 
                       );
    	// Responce for ajax
        echo $this->result;
    }
}

// Getting posted data
$data = json_decode(file_get_contents('php://input'));

$calculate = new Calculator($pdo,$data);
$calculate->multiplay();
$calculate->save();


