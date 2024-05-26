
<?php

include_once 'Conexion.php';

class Usuario{

    var $objetos;

    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }

    function Loguearse($cedula,$pass){
        $sql="SELECT * FROM usuario inner join tipo_usuario on us_tipo=id_tipo_us where cedula_us=:cedula and contrasena_us=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':cedula'=>$cedula,':pass'=>$pass));
        $this->objetos= $query->fetchall();
        return $this->objetos;
    }

}

?>