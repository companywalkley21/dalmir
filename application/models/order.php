<?php
require_once 'ParentModel.php';
class order extends ParentModel
{
    public $has_one = array('user');
   
    
    function __construct($id = null) {
        
        
        $config = array(
                    'controller_name'=>'products',
                    'form_title'=>'Editar Alumno'
        );
        
        
      // echo "- at sutden--".$id; 
        parent::__construct($id,$config);
        
      //  echo "id is*** $id";
        
        
    }
    
    
    
    
}