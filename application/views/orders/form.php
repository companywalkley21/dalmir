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

                        <form class="form-horizontal" role="form" method="post" action="<?php echo $record->getFormAction() ?>">
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








                        <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
        </div><!-- /.row -->
</div>