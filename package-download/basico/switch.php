<?php

$tipo = "Foto";

switch($tipo){

    case 'Foto':
        echo "Exibir FOTO";
        break;
    case 'Video':
        echo "Exibir VIDEO";
        break;
    case 'Texto':
        echo "Exibir TEXTO";
        break;
    default:
        echo "Sem valor";
        break;

    }
?>
