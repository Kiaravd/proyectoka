<?php 
include('../codigo.php');
$con = mysqli_connect(HOST, USER, PASSWORD, DB);
switch($_POST['action']) {
    case 'incluir':
        $sql="INSERT INTO usuarios VALUES ('',".$_POST['correo'].",MD5(".$_POST['pass']."));";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo json_encode(array('error'=>0, 'mensaje' => 'Se elimino con exito'));
        } else {
            echo json_encode(array('error'=>1, 'mensaje'=>'no se pudo eliminar'));
        }
        break;        
    case 'nada':
        break;        
}
?>