<?php

class products extends MY_Controller{
    
    
    function __construct() {
        
        $config = array("controller_name"=>__CLASS__,
                        "model_name"=>'product',
                        'parent'=>'school',
                        'parent_id'=>'1',
                        'rowsTitle'=>"Alumnos");
        
        
    
        parent::__construct($config);
    }
    
    
    function  getControllerName()
    {
        return __CLASS__;
    }


   
   
    
  
    function Scripts() {
        
      return $this->load->view("products/scripts/script",null,true);
        
    }
    
    
}