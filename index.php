<?php
#verificar se tem  ais de 5 letras
#se é um numero
#se possui @
# isset é verificar se exixte alguma coisa vindo
if(isset($_POST['acao'])){
echo 'Olá';
	$nome = $_POST ['nome'];
	$numero = $_POST ['numero'];
	$email = $_POST ['email'];
	if (strlen($nome) >= 5){
		echo("\n Nosso nome tem mais ou igual a 5 letras.");
	 }
	 if(is_numeric($numero)){
	 		echo 'É numero.';
	 		echo '<br>';
	 }
	if (strstr($email,'@') !=''){
		echo 'Tem email';
		echo '<br>';
		if (strstr($email,'gmail') !=''){
		echo 'O email do usuario é gmail!';
		echo '<br>';
		}
	}
}
?>
<form method="post">
	<input type="text" name="nome">
	<input type="text" name="numero">
	<input type="text" name="email">
	<input type="submit" name="acao">
</form>