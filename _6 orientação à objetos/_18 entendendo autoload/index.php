<?php
//Para ficar ainda mais organizado a gente pode colcar o AUTOLODING em um arquivo separado e importar apenas ele aqui
require 'autoloading.php';

//Para não ocorrer erros vc sempre deve colocar o nome arquivo igual ao de quando vc intâcia o objeto
$m = new Matematica();//O nome do arquivo é Matematica.php
echo $m->somar(7, 20);

