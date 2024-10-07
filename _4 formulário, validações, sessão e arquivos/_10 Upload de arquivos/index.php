<!-- 
    =>    Precisa ser pelo MÉTODO POST
    => O mais importante é o ENCTYPE pois é ele q vai possibilitar/mudar o tipo de como o formulário agrega o 
    conteúdo para fazer o envio desse dados
    => O ENCTYPE é necessário quando vamos enviar aquivos, quando for somente dados basta o MÉTODO POST
 -->
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="recebedor.php" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>