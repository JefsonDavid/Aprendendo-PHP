<!-- ========================================= FORMA BONIEKY FAZER ========================================= -->
<!-- <TAG?php 

//echo '<pre>';
//Para visualizar o arquivo que foi enviado vamos usar o PRINT_R() com a varável global $_FILES
//print_r( $_FILES );

//Existe uma função para vc mover o arquivo que foi enviado e que está em uma pasta temporária para um local permanente
//Essa função vai receber dois parâmetros
//$nome = $_FILES['arquivo']['name'];
//move_uploaded_file($_FILES['arquivo']['tmp_name'], '_4 formulário, validações, sessão e arquivos/arquivos/'.$nome);
// =============================================================================================================== -->
<!-- ==========================================================================================================
===============================================================================================================
=============================================================================================================== -->
<!-- CANAL DO YOUTUBE https://www.youtube.com/watch?v=P9TEc9I8IlI -->

<?php

    if(isset($_POST['acao'])){
        //Se existir o POST ACAO o meu formulário foi enviado
        //echo 'form enviado';

        //recuperando os arquivos
        $arquivo = $_FILES['arquivo'];

        $arquivoNovo = explode('.', $arquivo['name']);

        //SIZEOF é a função do php pra pegar o tamanho do array
        //Essa maneira abaixo é um truque q independente de quantos pontos tem pra o usuário tentar mudar a extensão
        //burlar o sistema ele não vai conseguir
        //Dessa forma eu to pegando o ultimo índice e caso seja diferente de JPG
        if($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg'){

            //
            die('Vc não pode fazer upload desse tipo de arquivo');
        }else{
            echo 'Upload foi feito com sucesso!!!';
            //fazendo o upload do arquivo
            move_uploaded_file($arquivo['tmp_name'], 'upload/'.$arquivo['name']);
        }
        
    }

?>
