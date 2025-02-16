<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script language="javascript" type="text/javascript">
$(document).ready(function()
{
	 
	$("#username").blur(function()
	{
		 
		 $.get("getCreditos.php",{ uname:$(this).val() } ,function(data)
        { 
		  if(data==0) //if username is there
		  {
		  	 
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			   $(this).html('This Username Already exists...').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
		   
				
        });
 
	});
});
</script>
<style type="text/css">
/*
Our CSS for the message box
*/
.messagebox{
	width:250px;
	margin-left:30px;
	border:1px solid #0064A1;
	background:#5F81D7;
	padding:3px;
	color:#ffffff;
}
.messageboxok{
	width:250px;
	margin-left:30px;
	border:1px solid #000000;
	background:#0064A1;
	padding:3px;
	font-weight:bold;
	color:#ffffff;
	
	
}
.messageboxerror{
	width:250px;
	margin-left:30px;
	border:1px solid #ff0000;
	background:#ffff33;
	padding:3px;
	font-weight:bold;
	color:#ff0000;
}

</style>
</head>
<body>
<span id="msgbox" style="display:none"></span>
<br />
<form id="frmReg" name="frmReg" method="post" action="ejemploAjax.php">
username: <input name="username" id="username" type="text" />
<br />
password: 
<input name="password" id="password" type="text" />
<br />
<input type="submit" id="button" value="register" />
</form>
</body>
</html>