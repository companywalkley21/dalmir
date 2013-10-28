<?php
require_once 'ParentModel.php';
class product extends ParentModel
{
    public $has_many = array('group','image','category');
    public $has_one = array('school');
    
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