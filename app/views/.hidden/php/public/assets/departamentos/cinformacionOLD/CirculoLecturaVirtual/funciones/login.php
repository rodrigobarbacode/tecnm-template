<?php
//session_start();


function usuarioInGrupo($id,$grupo){
	$controller = 1;
	require_once '../controller/verificaController.php';
	return $validar;
}

function verificaLogin(){
	if(isset($_SESSION['idusuario']) || isset($_COOKIE['idusuario'])){
		return TRUE;
	}
}



function uploadFile($file_field = null, $check_image = false, $random_name = false) {
       
  //Config Section    
  //Set file upload path
  $path = '../up/'; //with trailing slash
  //Set max file size in bytes
  $max_size = 1000000;
  //Set default file extension whitelist
  $whitelist_ext = array('jpg','png','gif');
 // $whitelist_ext = array("doc", "docx", "pdf", "gif", "jpeg", "jpg", "png");
  //Set default file type whitelist
  $whitelist_type = array('image/jpeg', 'image/png','image/gif');

  //The Validation
  // Create an array to hold any output
  $out = array('error'=>null);
               
  if (!$file_field) {
    $out['error'][] = "Por favor, especifique un nombre de campo de formulario válido";           
  }

  if (!$path) {
    $out['error'][] = "La ruta no se a especificado";               
  }
       
  if (count($out['error'])>0) {
    return $out;
  }

  //Make sure that there is a file
  if((!empty($_FILES[$file_field])) && ($_FILES[$file_field]['error'] == 0)) {
         
    // Get filename
    $file_info = pathinfo($_FILES[$file_field]['name']);
    $name = $file_info['filename'];
    $ext = $file_info['extension'];
               
    //Check file has the right extension           
    if (!in_array($ext, $whitelist_ext)) {
      $out['error'] = "La extension no es valida";
    }
               
    //Check that the file is of the right type
    if (!in_array($_FILES[$file_field]["type"], $whitelist_type)) {
      $out['error'] = "El tipo de archivo no es valido";
    }
               
    //Check that the file is not too big
    if ($_FILES[$file_field]["size"] > $max_size) {
      $out['error'] = "La imagen es demasiado grande";
    }
               
    //If $check image is set as true
    if ($check_image) {
      if (!getimagesize($_FILES[$file_field]['tmp_name'])) {
        $out['error'] = "El archivo subido no es una imagen válida.";
      }
    }

    //Create full filename including path
    if ($random_name) {
      // Generate random filename
      $tmp = str_replace(array('.',' '), array('',''), microtime());
                       
      if (!$tmp || $tmp == '') {
        $out['error']= "El archivo debe tener un nombre";
      }     
      $newname = $tmp.'.'.$ext;                                
    } else {
        $newname = $name.'.'.$ext;
    }
               
    //Check if file already exists on server
    if (file_exists($path.$newname)) {
      $out['error'][] = "Un archivo con este nombre ya existe ";
    }

    if (count($out['error'])>0) {
      //The file has not correctly validated
      return $out;
    } 

    if (move_uploaded_file($_FILES[$file_field]['tmp_name'], $path.$newname)) {
      //Success
      $out['filepath'] = $path;
      $out['filename'] = $newname;
	   $out['success'] = 1;
	
      return $out;
    } else {
      $out['error'] = "Error en el servidor!";
    }
         
  } else {
    $out['error'] = "La imagen no se pudo subir (Error desconosido)";
    return $out;
  }      
}



function subirArchivo($file_field = null, $check_image = false, $random_name = false) {
   
  //Config Section    
  //Set file upload path
  $path = '../up/libros/'; //with trailing slash
  //Set max file size in bytes
  $max_size = 1000000;
  //Set default file extension whitelist
 // $whitelist_ext = array('jpg','png','gif','pdf');
  $whitelist_ext = array("doc", "docx", "pdf");
  //Set default file type whitelist
  $whitelist_type = array('application/pdf','application/msword','image/pjpeg');

  //The Validation
  // Create an array to hold any output
  $out = array('error'=>null);
               
  if (!$file_field) {
    $out['error']= "Por favor, especifique un nombre de campo de formulario válido";           
  }

  if (!$path) {
    $out['error'] = "La ruta no se a especificado";               
  }
       
  if (count($out['error'])>0) {
    return $out;
  }

  //Make sure that there is a file
  if((!empty($_FILES[$file_field])) && ($_FILES[$file_field]['error'] == 0)) {
         
    // Get filename
    $file_info = pathinfo($_FILES[$file_field]['name']);
    $name = $file_info['filename'];
    $ext = $file_info['extension'];
               
    //Check file has the right extension           
    if (!in_array($ext, $whitelist_ext)) {
      $out['error'] = "La extension no es valida , el archivo debe ser .PDF , .DOC o .DOCX";
    }
               
    //Check that the file is of the right type
    if (!in_array($_FILES[$file_field]["type"], $whitelist_type)) {
      $out['error'] = "El tipo de archivo no es valido , el archivo debe ser .PDF , .DOC o .DOCX";
    }
               
    //Check that the file is not too big
    if ($_FILES[$file_field]["size"] > $max_size) {
      $out['error'] = "El archivo es demasiado grande";
    }
               
    //If $check image is set as true
    if ($check_image) {
      if (!getimagesize($_FILES[$file_field]['tmp_name'])) {
        $out['error'] = "El archivo subido no es una imagen válida.";
      }
    }

    //Create full filename including path
    if ($random_name) {
      // Generate random filename
      $tmp = str_replace(array('.',' '), array('',''), microtime());
                       
      if (!$tmp || $tmp == '') {
        $out['error']= "El archivo debe tener un nombre";
      }     
      $newname = $tmp.'.'.$ext;                                
    } else {
        $newname = $name.'.'.$ext;
    }
               
    //Check if file already exists on server
    if (file_exists($path.$newname)) {
      $out['error'][] = "Un archivo con este nombre ya existe ";
    }

    if (count($out['error'])>0) {
      //The file has not correctly validated
      return $out;
    } 

    if (move_uploaded_file($_FILES[$file_field]['tmp_name'], $path.$newname)) {
      //Success
      $out['filepath'] = $path;
      $out['filename'] = $newname;
	   $out['success'] = 1;
	
      return $out;
    } else {
      $out['error'] = "Error en el servidor!";
    }
         
  } else {
    $out['error'] = "Debes seleccionar un archivo!";
    return $out;
  }      
}





function subirLibro($file_field = null, $check_image = false, $random_name = false) {
       
  //Config Section    
  //Set file upload path
  $path = '../up/libros/'; //with trailing slash
  //Set max file size in bytes
  $max_size = 1000000;
  //Set default file extension whitelist
  $whitelist_ext = array('jpg','png','gif');
  //Set default file type whitelist
  $whitelist_type = array('image/jpeg', 'image/png','image/gif');

  //The Validation
  // Create an array to hold any output
  $out = array('error'=>null);
               
  if (!$file_field) {
    $out['error'][] = "Please specify a valid form field name";           
  }

  if (!$path) {
    $out['error'][] = "Please specify a valid upload path";               
  }
       
  if (count($out['error'])>0) {
    return $out;
  }

  //Make sure that there is a file
  if((!empty($_FILES[$file_field])) && ($_FILES[$file_field]['error'] == 0)) {
         
    // Get filename
    $file_info = pathinfo($_FILES[$file_field]['name']);
    $name = $file_info['filename'];
    $ext = $file_info['extension'];
               
    //Check file has the right extension           
    if (!in_array($ext, $whitelist_ext)) {
      $out['error'][] = "Invalid file Extension";
    }
               
    //Check that the file is of the right type
    if (!in_array($_FILES[$file_field]["type"], $whitelist_type)) {
      $out['error'][] = "Invalid file Type";
    }
               
    //Check that the file is not too big
    if ($_FILES[$file_field]["size"] > $max_size) {
      $out['error'][] = "File is too big";
    }
               
    //If $check image is set as true
    if ($check_image) {
      if (!getimagesize($_FILES[$file_field]['tmp_name'])) {
        $out['error'][] = "Uploaded file is not a valid image";
      }
    }

    //Create full filename including path
    if ($random_name) {
      // Generate random filename
      $tmp = str_replace(array('.',' '), array('',''), microtime());
                       
      if (!$tmp || $tmp == '') {
        $out['error'][] = "File must have a name";
      }     
      $newname = $tmp.'.'.$ext;                                
    } else {
        $newname = $name.'.'.$ext;
    }
               
    //Check if file already exists on server
    if (file_exists($path.$newname)) {
      $out['error'][] = "A file with this name already exists";
    }

    if (count($out['error'])>0) {
      //The file has not correctly validated
      return $out;
    } 

    if (move_uploaded_file($_FILES[$file_field]['tmp_name'], $path.$newname)) {
      //Success
      $out['filepath'] = $path;
      $out['filename'] = $newname;
	   $out['success'] = 1;
	
      return $out;
    } else {
      $out['error'][] = "Server Error!";
    }
         
  } else {
    $out['error'][] = "No file uploaded";
    return $out;
  }      
}



function uploadFile2 ($file_field = null, $check_image = false, $random_name = false) {
       
  //Config Section    
  //Set file upload path
  $path = 'up/'; //with trailing slash
  //Set max file size in bytes
  $max_size = 1000000;
  //Set default file extension whitelist
  $whitelist_ext = array('jpg','png','gif');
  //Set default file type whitelist
  $whitelist_type = array('image/jpeg', 'image/png','image/gif');

  //The Validation
  // Create an array to hold any output
  $out = array('error'=>null);
               
  if (!$file_field) {
    $out['error'][] = "Please specify a valid form field name";           
  }

  if (!$path) {
    $out['error'][] = "Please specify a valid upload path";               
  }
       
  if (count($out['error'])>0) {
    return $out;
  }

  //Make sure that there is a file
  if((!empty($_FILES[$file_field])) && ($_FILES[$file_field]['error'] == 0)) {
         
    // Get filename
    $file_info = pathinfo($_FILES[$file_field]['name']);
    $name = $file_info['filename'];
    $ext = $file_info['extension'];
               
    //Check file has the right extension           
    if (!in_array($ext, $whitelist_ext)) {
      $out['error'][] = "Invalid file Extension";
    }
               
    //Check that the file is of the right type
    if (!in_array($_FILES[$file_field]["type"], $whitelist_type)) {
      $out['error'][] = "Invalid file Type";
    }
               
    //Check that the file is not too big
    if ($_FILES[$file_field]["size"] > $max_size) {
      $out['error'][] = "File is too big";
    }
               
    //If $check image is set as true
    if ($check_image) {
      if (!getimagesize($_FILES[$file_field]['tmp_name'])) {
        $out['error'][] = "Uploaded file is not a valid image";
      }
    }

    //Create full filename including path
    if ($random_name) {
      // Generate random filename
      $tmp = str_replace(array('.',' '), array('',''), microtime());
                       
      if (!$tmp || $tmp == '') {
        $out['error'][] = "File must have a name";
      }     
      $newname = $tmp.'.'.$ext;                                
    } else {
        $newname = $name.'.'.$ext;
    }
               
    //Check if file already exists on server
    if (file_exists($path.$newname)) {
      $out['error'][] = "A file with this name already exists";
    }

    if (count($out['error'])>0) {
      //The file has not correctly validated
      return $out;
    } 

    if (move_uploaded_file($_FILES[$file_field]['tmp_name'], $path.$newname)) {
      //Success
      $out['filepath'] = $path;
      $out['filename'] = $newname;
	
      return $out;
    } else {
      $out['error'][] = "Server Error!";
    }
         
  } else {
    $out['error'][] = "No file uploaded";
    return $out;
  }      
}

function GetJson($url,$arg,$ch){
	//$arg = $_GET['g'];}

$url = $url.$arg;

//echo $url;
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);

// Closing
//echo $result;
curl_close($ch);

// Will dump a beauty json :3
//var_dump(json_decode($result, true));
$row = json_decode($result);
//echo $result;
return $row;
}



function Caracteres($string){
 $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_@"; 
   for ($i=0; $i<strlen($string); $i++){ 
      if (strpos($permitidos, substr($string,$i,1))===false){ 
        // echo $nombre_usuario . " no es válido<br>"; 
         return false; 
      } 
   } 
}

?>