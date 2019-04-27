<?php

class indexController{


    public function index(){
        require_once('views/all/header.php');
        require_once('views/index.php');
        require_once('views/all/footer.php');
        
    }


    public function Quienessomos(){
    $title='Quienessomos';
	require_once('views/all/header.php');
    require_once('views/all/Quienessomos.php');
	require_once('views/all/footer.php');
 }

    public function Producto(){
    $title='Producto';
	require_once('views/all/header.php');
    require_once('views/all/Producto.php');
	require_once('views/all/footer.php');

 }

               
    public function Iniciarsesion(){
    $title='Iniciarsesion';
    require_once('views/all/header.php');
    require_once('views/all/Iniciarsesion.php');
    require_once('views/all/footer.php');

}
    public function Registrarse(){
    $title='Registrarse';
    require_once('views/all/header.php');
    require_once('views/all/Registrarse.php');
    require_once('views/all/footer.php');

}

}












?>