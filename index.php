<?php
require_once 'controllers/controller.php';
require_once 'models/model.php';

//$dir = basename(__FILE__);
$dir = dirname(__FILE__);
if (isset($_GET['action'])) {
    $path = $dir ."\\". $_GET['action'];
} else $path = $dir;

$GLOBALS['baseURL'] = $path;

$mostrar = new Pagina();

$mostrar -> monstrarPlantilla();