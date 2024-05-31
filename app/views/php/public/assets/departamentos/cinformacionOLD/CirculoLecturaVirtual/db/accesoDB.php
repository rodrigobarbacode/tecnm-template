<?php
class AccesoDB{
	private static $cnPDO = null;
	public static function getConnectionPDO(){
		if(self::$cnPDO==null){
			try{
				
			/**	$param = parse_ini_file("../conf/local.ini");
				$url = 'localhost';
				$user = $param["2"];
				$pass = $param["3"];
			 * **/
			    $usuario="biblioteca"; $contraseña="biblioteca2015";
				self::$cnPDO = new PDO('mysql:host=localhost;dbname=circulo', $usuario, $contraseña);
				self::$cnPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				self::$cnPDO->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
				self::$cnPDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
				
			}
			catch(Exeption $exc){
				throw $exc;
			}
		}// fin de if
		return self::$cnPDO;
	}
}


?>
