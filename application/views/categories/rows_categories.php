 <?php foreach ($records  as $record):?>
                            
   <?php echo $record->getLevelString() ?><?php echo $record->name ?>

<br>
                              
<?php endforeach;?>  