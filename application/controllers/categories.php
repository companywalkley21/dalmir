<?php
require_once 'tree_controller.php';

class categories extends tree_controller{
    
    
    function __construct() {
        
        $config = array("controller_name"=>__CLASS__,
                        "model_name"=>'category',
                       
                        'rowsTitle'=>"Categorias");
        
        
    
        parent::__construct($config);
    }
    
    
    function  getControllerName()
    {
        return __CLASS__;
    }

    
    
    

//    function save($id=null)
//    {
//        print_r($_POST);
//        die();
//        
//    }
//   
    
  
    
    
    
}