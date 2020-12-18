<?php
    header("Content-Type: application/json");
    include_once("../corteCajero/clases/classCorteCajero.php");

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            echo 'OBTIENE ';
            
            if (isset($_GET['corte_cajero'])) {
                echo "Se retorna corte cajero con id ".$_GET['corte_cajero'];
            }else {
                echo "Se retornan todos los cortes cajero";
            }
            break;
        
        case 'POST':
            #echo 'GUARDA ';
            $_POST = json_decode(file_get_contents('php://input'), true);
            $corte = new corteCajero($_POST['idCorte'], $_POST['idUser'], $_POST['fechaCorte']);
            $fecha = $corte->getFechaCorte();
            echo json_encode($_POST);
            break;
    
        case 'PUT':
            echo 'ACTUALIZAR ';
            $_PUT = json_decode(file_get_contents('php://input'), true);
            echo json_encode($_PUT);
            break;
        
        case 'DELETE':
            echo 'ELIMINA';
            break;
        
        default:
            echo 'METODO NO MANEJADO';
            break;
    }
?>