<?php include('ingresar.php') ?>
<script>
function registrar(correo, contraseña){
    alert(correo+' '+ contraseña)
    // $.ajax({
    //         url: 'ingresar.php',
    //         data: {'action':'incluir', 'correo': correo, 'pass': contraseña},
    //         type: 'POST',
    //         dataType: 'json',
    //          success: function(data) {
    //             if(data['error'] == 0)
    //                 alert(data['mensaje']);
    //             else 
    //                 alert("no se ingreso correctamente por :" + data['mensaje'] );                
    //         }
    //     });
    }
</script>