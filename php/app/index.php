<?php
function callApi(){
  return 'api.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <title>Document</title>
</head>
<body>
  <section>

    <form action="<?=callApi();?>" method="post">
    <h1>Envio de Email integrado com o container do Python</h1>
      <div  class="div-1">
        <label for="to">Email do Destinatário</label>
        <input name= to type="text" id="meu_input " value="<?='exemplo@.com.br'?>">
      </div>
      <div class="div-2">
        <label for="context">Conteúdo que será enviado</label>
        <input type="text" name="context"value="<?='o que vc deseja enviar'?>">
      </div>
      <button type="submit">Enviar</button>
    </form>
  </section>
  
</body>
</html>
