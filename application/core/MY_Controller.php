<?php 

class MY_Controller extends CI_Controller {
    
    
    public  $view = 'rows';
    protected $id; 
    public $controller_name;
    public $rowsTitle;
    public $model_name;
  
    public $field;
    public $dir; 
    public $action;
    
    public $object; 
    
    public $parent;
    public $parent_id;
    function __construct($config=array()) {
        
        //print_R($config);
        foreach($config as $property=>$value)
        {
            $this->$property=$value;
        }
        
       
       
        parent::__construct();
    }
    
    function index()
    {
        //echo "build page";
        echo $this->buildPage();
    }
    
   
    function  Content()
    {
        //echo 'calling content';
        
        if ($this->view == 'rows')
        return $this->Rows();
        else
        return $this->FormView();
    }
 
    
    function Rows()
    {
        
      //  echo "called at ".__CLASS__."  ({$this->getControllerName()})";
        
         /*
         $props = get_class_vars($this);
         echo "<pre>";
         print_r($props);
         echo "</pre>";
         */
        
        //echo $this->model_name;
        
        ///echo 'callking rows     ';
        
      
        
        $ModelName = $this->model_name;
        
        
        
        $object = new $ModelName();
        
      

        //echo $object;
        //echo $this->controller_name;
              
        $object->setController($this);
        if ($this->action=='sort')
        {
            $object->order_by($this->field,$this->dir);
        }
        
        
        $all = $object->get();
        $data=array();
        $data['rows']= $all;
        $data['rowsTitle']=$this->rowsTitle;
        $data['record']=$object;
        
        
        return $this->load->view("{$this->controller_name}/rows_{$this->controller_name}",$data,true);
        
        
    }
    
    function FormView()
    {
          //echo $this->id;
          $ModelName = $this->model_name;
          $object = new $ModelName($this->id);
          $data['record']= $object;
          return $this->load->view("{$this->controller_name}/form",$data,true);
    }
    
    
    function form($id=null)
    {
        
        $params = $this->uri->uri_to_assoc(3);

        //@TODO parameter validation 

    //    $id= $params['id'];
        
        /*
        $parent = $params['parent'];
        $parent_id = $params['parent_id'];
         
        $p = new $parent($parent_id);
        */
      //  echo "id is $id ";
        
        $this->id = $id;
        $this->view = 'form';
        $this->index();
        
    }
    
    
    function save($id=null)
    {
        $this->id = $id;
        $object = $this->_update($this->id);
        $id= $object->id;
        
        
     
       
        $upload_data = $this->uploads();
        
        /*handle uploads */
        if (!empty($upload_data))
        {
            
            foreach($upload_data as $uK => $uV)
            {
               
                $this->load->library('image_lib'); 
                $this->image_lib->clear();
                $config['dynamic_output']=false;   
               
                $config['source_image']	= $uV['full_path'];// path to the saved image.
              
                $config['maintain_ratio'] = TRUE;
                $config['width']	 = 500;
                $config['height']	= 500;
                
                $config['image_library'] = 'gd2';
             
                $config['wm_text'] = 'Dalmir - Bisuteria';
                $config['wm_type'] = 'text';
               
                $config['wm_font_path'] = 'system/fonts/texb.ttf';
                $config['wm_font_size']	= '26';
                $config['wm_font_color'] = 'cccccc';
                $config['wm_vrt_alignment'] = 'middle';
                $config['wm_hor_alignment'] = 'center';
                $config['wm_padding'] = '0';
   
                         
                $this->image_lib->initialize($config); 
                $this->image_lib->resize();
                $this->image_lib->watermark();
                
                
                
                
                
                $i = new Image();
                foreach($uV as $f=>$v)
                {
                    $i->$f = $v;
                    
                }
                $i->save();
                $object->save($i);
            }
        }
        
        
        $this->object = $object;
        
        $this->redirect();
        
      
    }
    
    function redirect()
    {
        
        $action= $_POST['action'];
        if ($action=="stay")
        redirect("{$this->controller_name}/form/{$this->object->id}");
        else 
        redirect("{$this->controller_name}/");     
        
    }
    function _update($id=null)
    {
        $ModelName =  $this->model_name;
        $object = new $ModelName($id);
        $object->saveFromPost();
        
        //echo $object->id;
        return $object;
    }
    
    function buildPage()
    {
        //echo 'calling page ';
        
        $parts['menu']=$header  = $this->Menu();
        $parts['content']=$header  = $this->Content();
        $parts['scripts']=$header  = $this->Scripts();
        
        //$parts['footer']=$header  = $this->Header();
        //$parts = array();
        return $this->parser->parse('layout',$parts,true);
        
        
        
    }
    
    function Menu()
    {
        
          
     //   $m = new Menu();
       
       // $all = $m->get();
       // $data=array();
        //$data['rows']= $all;
      
        
       // print_R($data);
        //return "--";
        
        $data = array();
        return $this->load->view("menu",$data,true); 
        
    }
    
    
    function action()
    {
        /* echo "at actin";
        
       
        echo "<pre>";
        print_R(($params));
        echo "</pre>";*/
        $params = $this->uri->uri_to_assoc(2);
         
        foreach($params as $key=>$val)
        {
            $this->$key=$val;
        }
      
//        echo "<pre>";
//        print_R(get_object_vars($this));
//        echo "</pre>";
        $this->index();
        
    }
    
    
    function _sort($by,$dir)
    {
        
        $this->sort_by = "$by";
        $this->dir = "$dir";
        
        
        $this->index();
    }
    
    
    
    function __toString() {
        return __CLASS__;
    }
    
    function getControllerName()
    {
        
    }
    
    
    function  ajax()
    {
        
     
       $params = $this->uri->uri_to_assoc(3); 
        
      // print_r($params); 
      
       $parent= $params['parent'];
       $parent_id= $params['parent_id'];
       
       
       $data=array();
       $o = new $this->model_name;
       $o->get(120);
       $data['rows']=$o->all;
       $data['parent']=$parent;
       $data['parent_id']=$parent_id;
       
       
       
       echo $this->load->view("modals/students",$data);
       
    }
     function  ajax_model_body($param=null)
    {
        
       if ($param) 
       { echo $this->load->view("modals/students2",null);
         return;
       }
       
       $data=array();
       $o = new $this->model_name;
       $o->get(120);
       $data['rows']=$o->all;
       
       echo $this->load->view("modals/students_modal_body",$data);
       
    }
    
    //http://localhost/escuela/groups/ajax_insert/model/group/model_id/1/child/student/child_id/4
    function ajax_insert()
    {
        
       $params = $this->uri->uri_to_assoc(3);
      
       $model = $params['model'];
       $model_id = $params['model_id'];
       $child = $params['child'];
       $child_id = $params['child_id'];
       
       $m = new $model($model_id);
       $c = new $child($child_id);
       $m->save($c);
       
       
       
       
       
    }
    function Scripts()
    {
        return '';
    }
    
    /*image management*/
    
    function uploads()
     {        

             // echo "<pre>"; 
              //print_R($_FILES);

              //die();
              $ret = array();


              $this->load->library('upload');
              $config['upload_path'] = './uploads/';
              $config['allowed_types'] = 'gif|jpg|png|pdf|zip|psd|xls|rar';
              //$config['max_size']	= '10000';
              //$config['max_width']  = '1024';
              //$config['max_height']  = '768';

               foreach ($_FILES as $key => $value)
               {
                    
                      if (!empty($value['name']))
                      {
                          // echo "--inside ---{$value['name']}";   

                          $this->upload->initialize($config);
                          if (!$this->upload->do_multi_upload($key))
                          {

                             // $errors = $this->upload->display_errors();
                             //                                 var_dump($errors);
                                                             // die();

                          }
                          else
                          {
                              $ret= $this->upload->get_multi_upload_data();
                          }
                      }
                  }   

       
      
      return $ret;


     }

     
     function delete_image($id,$parent_id)
     {
         /*todo check for a resonable security */
         
         $i = new Product($parent_id);
         $i->image->where('id',$id)->get(1)->delete();
         
         
         
     }
    
}