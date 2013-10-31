<?php

class tree_controller extends MY_Controller
{
    
    function __construct($config = array()) {
        parent::__construct($config);
    }
    
    
    function Rows() {
        
        
        
        $model = $this->model_name;
        
        //echo $model;
        
        $p = new $model(null,$this);
        
        
       // echo " $this->parent, $this->parent_id ";
       // die();
        
        $records =  $p->getTreeTable($except_id = null , $this->parent, $this->parent_id);
        $data['rowsTitle']='';
        $data['rows']=$records;
        $data['record']=new category();
        
        return $this->load->view("categories/rows_categories",$data,true);
        
        //$new_record_url = base_url("{$this->getControllerName()}/form/0/");
        
      
        
       
        
    
        
    }
    
    
    
    
}