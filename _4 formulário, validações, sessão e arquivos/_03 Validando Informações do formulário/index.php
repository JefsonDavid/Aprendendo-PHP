<!-- IMPOTANDO ARQUIVOS -->
<?php
require_once('header/header.php');
?>
<link rel="stylesheet" href="header/style.css">
<!-- ======================================================== -->

<form action="recebedor.php" method="post">

    <label>
        Nome:
        <br/>
        <input type="text" name="nome" id="">
    </label>
    <br/>
    <br/>
    <label>
        E-mail:
        <br/>
        <input type="email" name="email" id="">
    </label>
    <br/>
    <br/>
    <label>
        Idade:
        <br/>
        <input type="text" name="idade" id="">
    </label>
    <br/>
    <br/>

    <input type="submit" value="Enviar">

</form>
