<?php
//$nome = 'Jefson';
//$sobrenome = ' David';

$nomeCompleto = $nome ?? 'Visitante';

//Apartir do php 7.4 vc tem uma forma mais simples de fazer essa linha
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';



//Quando vc tem uma condição onde se vc tiver uma variável vc vai repetir ela msm vc pode usar dessa fomra.
$nomeCompleto .= $sobrenome ?? ''; 


echo $nomeCompleto;