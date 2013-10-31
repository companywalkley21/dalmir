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

    
    
    

  function save($id=null)
  {
      
      
      parent::save($id);
      //echo $_POST['parent_id'];
      $this->object->saveParent($_POST['parent_id']);
      
      parent::redirect();
  }
   
  function redirect() {
      //parent::redirect();//preventing from bbeing called by the father
  }  
  
    
    
    
}