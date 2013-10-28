<?php 

?>

<div class="page-content">
        <div class="page-header">
                <h1>
                        <?php ?>
                        <small>
                                <i class="icon-double-angle-right"></i>
                                Common form elements and layouts
                        </small>
                </h1>
        </div><!-- /.page-header -->

        <div class="row">
                <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo $record->getFormAction() ?>">
                                <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                            Nombre
                                        </label>

                                        <div class="col-sm-9">
                                                <input  value="<?php echo $record->name; ?>" 
                                                        type="text" 
                                                        name="name"
                                                        id="form-field-1" 
                                                        placeholder="Nombre del producto" 
                                                        class="col-xs-10 col-sm-5">
                                        </div>
                                </div>
                            <div class="space-4" ></div>
                             <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                            Código
                                        </label>

                                        <div class="col-sm-9">
                                                <input  value="<?php echo $record->code; ?>" 
                                                        type="text" 
                                                        name="code"
                                                        id="form-field-1" 
                                                        placeholder="Codigo del Producto" 
                                                        class="col-xs-10 col-sm-5">
                                        </div>
                                </div>
                            
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                           Precio
                                        </label>

                                        <div class="col-sm-9">
                                                <input  value="<?php echo $record->price; ?>" 
                                                        name="price" 
                                                        id="filesToUpload" 
                                                        type="text" 
                                                       
                                                        class="col-xs-10 col-sm-5">
                                              
                                        </div>
                                      
                                </div>
                            
                            
                                 <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                            Imagen(es)
                                        </label>

                                        <div class="col-sm-9">
                                                <input  value="<?php echo $record->code; ?>" 
                                                        name="file[]" 
                                                        id="filesToUpload" 
                                                        type="file" 
                                                        multiple="" 
                                                        onChange="makeFileList()"  
                                                        name="code"
                                                        id="form-field-1" 
                                                        placeholder="Codigo del Producto" 
                                                        class="col-xs-10 col-sm-5">
                                        <ul class="col-sm-9" id="fileList" style="list-style-type: none;margin:0;padding:0;">
                                            
                                        </ul>        
                                        </div>
                                      
                                </div> 
                            
                            
                               
                               <div class="form-group">
                                   
                              <?php 
                              
                              $c = new category();
                              
                              $tree = $c->buildUl();
                              echo $tree;
                              
                              
                              
                              ?>     
                                   
                                   
                                   
                                		
                                </div> 
                            
                                <div class="space-4" ></div>

                               
                                
                                 
                                
                                
                                
                                

                               
                               

                               

                                <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                                <button class="btn btn-info" type="submit" value="stay" name="action">
                                                        <i class="icon-ok bigger-110"></i>
                                                        Guardar
                                                </button>

                                                &nbsp; &nbsp; &nbsp;
                                                <button class="btn" type="submit"  value="back" name="action">
                                                        <i class="icon-undo bigger-110"></i>
                                                       Guardar y volver al listado
                                                </button>
                                        </div>
                                </div>












                        </form>

                        <div class="row-fluid">
                            <ul style="list-style-type: none;" class="row-fluid">
                            <?php $all = $record->image->get()->all; ?>
                            <?php foreach ($all as $image ): ?>
                                
                            <li id="theimage-<?php echo $image->id?>" style="float:left;margin-right: 10px;min-height: 300px;"class="" >
                                
                                <img  src="<?php echo site_url('uploads').'/'.$image->file_name;?>" style="max-width: 240px;"  >
                                <a href="<?php echo site_url("products/delete_image/{$image->id}/{$record->id}")?>" class="delete-image" image-id="<?php echo $image->id ?>" parent-id="<?php echo $record->id; ?>" style="display:block;" >Eliminar</a>
                            </li>
                                
                            <?php endforeach;?>
                            </ul>
                        </div>






                        <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
        </div><!-- /.row -->
        
   
        
        
</div>


