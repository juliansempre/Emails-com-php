<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contato</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<div class="colorido"><div class="bloco0">	
<table class="tab">

<form action="envia.php" onclick="verifica()" name="formu" method="POST" enctype="multipart/form-data">
<tr><td><p class="tex">Envie o seu email!</p><br /><br /></tr></td>
<tr><td><input type="text" class="formte" id="nome" name="nome" placeholder="Qual o seu nome?" /><br /><br /></tr></td>
<tr><td><input type="text" class="formte" id="quem" name="quem" placeholder="Para qual email gostaria de enviar?" /><br /><br /></tr></td>
<tr><td><input type="text" class="formte" id="senha"  name="senha" placeholder="Qual o seu e-mail?"/><br /><br /></tr></td>
<tr><td><textarea name="contato"class="forme" id="contato"  title="Escreva a sua mensagem"></textarea><br /><br /></tr></td>
<tr><td><center><input type="submit" class="formb" name="Enviar" onClick="verifica()" value="Enviar" name="enviar" />
<input type="reset" value="limpar"  class="formb"  /></center><br/></tr></td>
</form>

</table>
<!-- ====================================
// <input type="reset" value="limpar" /> // limpar o formulario
==================================== -->
</div></div>
<script>
    

//validação javascript campo vazio:

</body>
</html>