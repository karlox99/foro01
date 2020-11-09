<?php
/*usuario con 8 o más caracteres strlen y su contraseña el nombre de usuario al revés strrev*/
function usuarioOK($nombre, $contraseña) {
 if( (strlen($nombre) >= 8) && ($contraseña == strrev($nombre)) ){
        return true;
    }else{
        return false;
    }
}
