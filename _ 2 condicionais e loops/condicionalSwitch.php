<?php
$tipo ='video';

//if($tipo == 'foto'){
  //  echo 'Exibindo uma foto';
//}if($tipo == 'video'){
  //  echo 'Exibindo um vídeo';
//}if($tipo == 'texto'){
  //  echo 'Exibindo um texto';
//}

//  EXISTE UMA FORMA CORRETA DE FAZER ESSE CÓDIGO ACIMA E É USANDO SWIRCH

switch($tipo){
    case 'foto':
        echo 'Exibindo FOTO';
    break;
    case 'video':
        echo 'Exibindo VÍDEO';
    break;
    case 'texto':
        echo 'Exibindo TEXTO';
    break;
}