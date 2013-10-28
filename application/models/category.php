<?php  
require_once ("TreeModel.php");

class category extends TreeModel
{
    
    
    public   $has_many = array(
        'related_category' => array(
            'class' => 'category',
            'other_field' => 'category',
            'reciprocal' => false,
            'join_table' => 'categories_categories'
        ),
        'category' => array(
            'other_field' => 'related_category',
            'join_self_as'=>'category',
            
        ),
       'product'
       
        
    );
    
     public $base_table = 'categories';
    public $child_field ="category_id";
    public $parent_field = "related_category_id";
    public $link_table="categories_categories";
    public $model_name = "category";
    
    function __construct($id = NULL) {
        
        
        parent::__construct($id);
    }
    function getModelName() {
        return 'category';
    }
    function getExternalParentField() {
        return null;
    }
    function getBaseTable() {
        return 'categories';
    }
    public function getChildField() {
        return 'categorie_id';
    }
    
    public function getParentName() {
        return 'products_categories';
    }
    
    
    public function getParentField(){
        
        return 'related_category_id';
    }
    
    function getLinkTable() {
        return 'categories_categories';
    }
    
    function getParentTable()
    {
        
        return 'products_categories';
    }
    
  
    
}
