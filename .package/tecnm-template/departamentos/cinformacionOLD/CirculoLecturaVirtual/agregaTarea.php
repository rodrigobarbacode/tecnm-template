
  <div id="messageLibro">

</div>
            <div class="panel panel-default">
 

                <div class="panel-body form-horizontal ">
                	<form id="addTareass" action="controller/bibliotecaController.php"  method="post" enctype="multipart/form-data" >
                    
                        <script type="text/javascript">
$(document).ready( function(){ 
	 
	$(".cb-enable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-disable',parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox',parent).attr('checked', true);
	});
	$(".cb-disable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-enable',parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox',parent).attr('checked', false);
	});
});



$(document).ready(function () {
    $("input[name=field]:radio").change(function () {

      $('#log').val( $(this).val() + '|');
          var que =  $(this).val();
        if(que=="radio1"){
           	$("#libroC").html('    <input type="file"  class="form-control"  name="librofile" id="archivoLibro"> <input type="hidden" size="60" name="SubeLibro" id="archivoLibro">');
           	$("#libroT").html(' Subir libro(pdf,doc,docx)');
        }else{
        	$("#libroC").html('<input type="text" class="form-control" id="enlace" name="enlace" placeholder="http://ejemplo.com/libro.pdf"  required >');
        		$("#libroT").html('Enlace Externo');
        }      
    })
});
</script>

                    
                      <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label"> <div id="libroT">  Subir Tarea </div></label>
                        <div class="col-sm-9">
                          <div id="libroC">  <input type="file" class="form-control" name="librofile" id="librofile" > 
                          	<input type="hidden" size="60" name="SubeTarea" id="archivoLibro">
                          	<input type="hidden" id="idtarea" size="60" name="idtarea" >
                          	  </div>
                        </div>
                    </div>
                    
                    
                    
                  <!--  <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                  </div>    -->
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                        	
               <span class='glyphicon glyphicon-plus'></span> <input type="submit"   class="btn btn-default preview-add-button" value="  Agregar Nuevo Libro"><br>
                           
                        </div>
                    </div>
                    
                    
                       <center><div id="imagenLibro"></div>
 
 <div id="progress">
       
</div>
    </center>        
         
<script>
$(document).ready(function()
{
	 


	var options = { 
    beforeSend: function() 
    {
    	$("#progress").show();
    	//clear everything
    	$("#bar").width('0%');
    	$("#messageLibro").html("");
		$("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
    	$("#bar").width(percentComplete+'%');
    	$("#percent").html(percentComplete+'%');

    
    },
    success: function() 
    {
        $("#bar").width('100%');
    	$("#percent").html('100%');
    	$("#imagenClibro").val("");
    	$("#imgInpLibro").val("");

    },
	complete: function(response) 
	{
		$("#messageLibro").html("<font color='green'>"+response.responseText+"</font>");
		$("#progress").html('');
		$("#imagenLibro").html('');
		$("#imgInpLibro").val("");
	},
	error: function()
	{
		$("#messageLibro").html("<font color='red'> ERROR: unable to upload files</font>");
		$("#progress").html(''); $("#imgInpLibro").val("");
		$("#imagenLibro").html('');

	}
     
}; 

     $("#addTareass").ajaxForm(options);

});

</script>   
            
            
            
            </div>            
        </div> <!-- / panel preview -->
</form>
 
 
             </div>
             </div>

