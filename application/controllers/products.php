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
    
    function save($id = null)
    {
        
        parent::save($id);
        
        /*save categories*/
        
        /*delete all and save ageain*/
        
        $cat = new category();
        $cat->where_related('product','id',$this->object->id)->get();
        $this->object->delete($cat->all);
        
        if (!empty($_POST['categories'])){
            
            $categories= $_POST['categories'];
        
            foreach($categories as $category_id)
            {

                $c = new category($category_id);
                echo $c->name;
                $this->object->save($c);

            }
        
        
        }
        
        
    }
            
    
    function redirect() {
        
        //parent::redirect();
        
    }
    
    
}