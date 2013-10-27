<?php
require_once 'ParentModel.php';
class user extends ParentModel
{
    public $has_many = array('role','order');
   
    
    function __construct($id = null) {
        
        
        $config = array(
                    'controller_name'=>'users',
                    'form_title'=>'Editar Usuario'
        );
        
        
      // echo "- at sutden--".$id; 
        parent::__construct($id,$config);
        
      //  echo "id is*** $id";
        
        
    }
    
    
    
    
}