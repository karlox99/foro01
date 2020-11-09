<?php
$comentario= $_REQUEST['comentario'];


/*tiene preferencia la primera que se ponga repetida en caso de empate, o de que no haya ninguna repetida*/
function letraRepe($comentario) {
    $max=0;
    $letra=0;
    $repe=0;
    /*recorro letras hasta que acabe*/

    for ($i=0;$i< strlen($comentario);$i++){
        $letra=$comentario[$i];
        if ($letra!=" " && substr_count($comentario,$letra)>$max){
            $max= substr_count($comentario,$letra);
            $repe=$letra;
        }
    }
    return $repe;
}




	/*igual que con las letras pero tengo que fijarme si hay espacois o algo para contar las palabras
	/*tiene preferencia la primera que se ponga repetida en caso de empate, o de que no haya ninguna repetida*/
function palabraRepe($comentario) {
    $max=0;
    $letra=null;
    $repe=null;
    $palabra=null;
    for ($i=0;$i< strlen($comentario);$i++){
        $letra=$comentario[$i];
        if ($letra != " "){
            $palabra = $palabra.$letra;
        }else{
            if ( substr_count($comentario,$palabra)>$max){
                $max= substr_count($comentario,$palabra);
                $repe=$palabra;           
            }
            $palabra= null; /*si no hay mas de 1 palabra se queda vacia la respuesta*/
        }
    }
    return $repe;
}


?>
<!--HTML------------------------------------------------------>
<div>
<b> Detalles:</b><br>
<table>
<tr><td>Longitud:          </td><td><?= strlen($_REQUEST['comentario']) ?></td></tr>
<tr><td>Nº de palabras:    </td><td><?= str_word_count($comentario) ?></td></tr>
<tr><td>Letra + repetida:  </td><td><?= letraRepe($comentario)?></td></tr>
<tr><td>Palabra + repetida:</td><td><?= palabraRepe($comentario)?></td></tr>
</table>
</div>