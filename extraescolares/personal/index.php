
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
 	<title>SGE</title>
	    <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
<body>
	<div class="container-fluid single-page" id="main-container">
		<div class="middle-panel-login">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-5 col-xs-4 col-xs-offset-4">
                    <img src="https://mexicali.tecsge.com/img/sge_white.png" alt="SGE" class="img-responsive">
                </div>
            </div>
            <br>
            <form action="../login" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading image text-center">
                        <img src="https://mexicali.tecsge.com/img/tnm.png" alt="Logo Tec" class="img-heading hidden-xs">
                        <h3 class="panel-title">
                                                        Instituto Tecnológico de Mexicali
                                                    </h3>
                        <img src="https://mexicali.tecsge.com/storage/data/tec/vNMoFJabpJsEPgUdiJ6LtKgRkTJD2ePs0OXQAydL.png" alt="Logo Tec" class="img-heading hidden-xs">
                    </div>
                    <div class="panel-body">
                        <p class="text-center">Bienvenido al Sistema de Gestión Escolar, por favor selecciona la opción de acuerdo a tus actividades.</p>
                        <br>
                        <ul class="nav nav-pills nav-center"> 
                        <li role="presentation"  class="active"><a href="../">Alumno</a></li>
                        <li role="presentation" ><a href="#">Personal</a></li>
                        </ul>
                        <br>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="form-group label-floating">
                                    <label for="user" class="control-label">Nombre de usuario</label>
                                    <input type="text" name="user" id="user" class="form-control" value="">
                                </div>
                                <div class="form-group label-floating">
                                    <label for="password" class="control-label">Contraseña</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="panel-footer text-right">
                        <button type="submit" class="btn btn-primary btn-raised btn-sm"><i class="fa fa-sign-in"></i> Acceder</button>
                    </div>
                </div>
                <input type="hidden" value="personal"/>
            </form>
        </div>
    </div>
</div>
	</div> 
	<div id="notify" class="notifxi-alert"></div>
</body>
</html>
