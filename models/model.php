<?php
class Modulo {
    public function mostrarModulo($enlaceModelo) {
        switch ($enlaceModelo) {
            case 'cuenta':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;

            case 'cookies':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;
                
            case 'modalidades':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;
                
            case 'privacidad':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;
                
            case 'staff':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;
                
            case 'terminos':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;
                
            case 'ayuda':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;
                
            case 'reglas':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;
                
            case 'apelar':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;
                
            case 'ticket':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;
                
            case 'contacto':
                $modulo = 'views/modules/' . $enlaceModelo . '.php';
                break;
            
            default:
                $modulo = "views/modules/inicio.php";
                break;
        }
        return $modulo;
    }
}
