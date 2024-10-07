<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cabeçalho</title>
</head>
<body>
    <header>
        <div class="container-logo">
            <div class="logo-imagem"></div>
            <div class="logo-testo">
                <h1>CABEÇALHO</h1>
            </div>
        </div><!-- container-logo -->
            
        <div class="menu">
            <ul>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">História</a></li>
            </ul>
        </div>
    </header>

    <?php
        //SE EXISTIR UM COOKIE VC VAI MOSTRAR ELE NA TELA
        if(isset($_COOKIE['nome'])) { //SE TIVER SETADO ELE ENTRA SE NÃO TIVER SETADO ELE NÃO ENTRA
            $nome = $_COOKIE['nome'];
            echo '<h2>'.$nome.'</h2>';
        }
    ?>
</body>
</html>