

 
 <script type="text/javascript"
            src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
 <link rel="stylesheet" type="text/css"
          href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css"/>


 <script type="text/javascript" src="<?php echo site_url()?>assets/tree/js/jquery.tree.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/tree/css/jquery.tree.css"/>
 



<script>
function makeFileList() {
			var input = document.getElementById("filesToUpload");
			var ul = document.getElementById("fileList");
			while (ul.hasChildNodes()) {
				ul.removeChild(ul.firstChild);
			}
                        if (input.files.length>1){
			for (var i = 0; i < input.files.length; i++) {
				var li = document.createElement("li");
				li.innerHTML = input.files[i].name;
				ul.appendChild(li);
			}
                        }
			if(!ul.hasChildNodes()) {
				//var li = document.createElement("li");
				//li.innerHTML = 'No Files Selected';
				//ul.appendChild(li);
			}
		}

</script>
<script>
    (function($){
        
        $(document).ready(function(){
           // alert(5)
            $(".delete-image").click(function(){
             
                if (confirm("Confirma la eliminación de la Imagen")){
                var image =  $(this).attr('image-id');
                
                //alert(image);
                
                var mparent =  $(this).attr('parent-id');
                
                //alert(mparent);
               
               
               var r = $(this).attr('href');
               
               //prompt(r,r);
                $.get(r,function(data){
                    
                    
                  //  alert(data);
                    
                });
               
               
               
                var imageid = $('#theimage-'+image);
                imageid.fadeOut();
               
                }
                
                
                return false;
                
            });
            
        });
        
    })(jQuery);
</script>
<script> 
					$(document).ready(function (){
							$('#tree').tree({});
					});	
</script> 
