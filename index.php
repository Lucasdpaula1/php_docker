<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bem vindos a uma página construída em <?='php' ?> com o intuito de verificar se o redirecionamento do servidor nginx está funcionamento corretamente</h1>
    <?php $fruits = ['maçã','banana', 'melão', 'limão', 'goiaba','abacaxi'] ?>
    <h2>confira a lista de produtos do nosso site</h2>
    <ul>
        <?php foreach ($fruits as $fruit) :?>
            <li> <?=$fruit ?> </li>
        <?php endforeach ?>
    </ul>
</body>
</html>