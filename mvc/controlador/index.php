<?php
require_once("modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function index(){
        $producto   = new Modelo();
        $dato       =   $producto->mostrar("servicios","1");
        require_once("vista/index.php");
    }
    //nuevo
    static function nuevo(){        
        require_once("vista/nuevo.php");
    }
    //guardar
    static function guardar(){
        $tiposervicio= $_REQUEST['tiposervicio'];
        $precio= $_REQUEST['precio'];
        $beneficios= $_REQUEST['beneficios'];
        $data = "'".$tiposervicio."',".$precio."',".$beneficios;
        $producto = new Modelo();
        $dato = $producto->insertar("servicios",$data);
        header("location:".urlsite);
    }



    //editar
    static function editar(){    
        $id = $_REQUEST['codigo'];
        $producto = new Modelo();
        $dato = $producto->mostrar("servicios","codigo=".$codigo);        
        require_once("vista/editar.php");
    }
    //actualizar
    static function actualizar(){
        $codigo = $_REQUEST['codigo'];
        $tiposervicio= $_REQUEST['tipo servicio'];
        $precio= $_REQUEST['precio'];
        $beneficio= $_REQUEST['beneficio'];
        $data = "tipo servicio='".$tiposervicio."',precio=".$precio."',beneficio=".$beneficio;
        $producto = new Modelo();
        $dato = $producto->actualizar("servicios",$data,"codigo=".$codigo);
        header("location:".urlsite);
    }


    //eliminar
    static function eliminar(){    
        $id = $_REQUEST['codigo'];
        $producto = new Modelo();
        $dato = $producto->eliminar("servicios","codigo=".$codigo);
        header("location:".urlsite);
    }


}