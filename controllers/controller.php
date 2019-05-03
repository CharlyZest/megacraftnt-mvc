<?php
class Pagina {
    
    public function monstrarPlantilla() {
        include 'views/template.php';
    }

    public function mostrarPagina() {
        if (isset($_GET['action'])) {
            $enlaceController = $_GET['action'];
        } else { 
            $enlaceController = 'inicio'; 
        }

        $respuesta = Modulo::mostrarModulo($enlaceController);
        include $respuesta;

    }

}