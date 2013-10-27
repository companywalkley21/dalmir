<?php

require_once("ParentModel.php");

class Image extends ParentModel
{
    
    public $default_order_by = array('created'=>'desc');
    
    public $has_one = array('product');
    function __construct($id = NULL, $config = array()) {
        parent::__construct($id, $config);
    }
    
    
}