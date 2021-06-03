<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title>Cadastro de usuário</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="_css/formulario.css">
		<script type="text/javascript">
			function confirmaCad(){
				alert("Cadastro Realizado com sucesso. Confira as informações a seguir");
			}
		</script>
	</head>
	<body>
		<main class="container">
		<h4>Cadastro de Usuário</h4>
		<form method="post" action="cadastrar.php">
			<div>
				<label>Nome</label>
				<input type="text" name="nome" placeholder="Nome aqui" required/>
			</div></br>
			<div>
				<label for="">e-mail</label>
				<input type="email" name="email" placeholder="usuario@mail.com" required/>
			</div></br>
			<div>
				<label>senha</label>
				<input type="password" name="senha" placeholder="senha" required></textarea>
			</div></br>
			<div>
				<label>Opinião/Sugestão</label>
				<textarea type="text" placeholder="Deixe sua opinião ou sugestão para melhorarmos as aulas" id="mensagem" name="opina" rows="5" cols=30></textarea>
			</div>
			<div id="botao">
				<input type="submit" class="btn_enviar" name="cadastrar" onclick="confirmaCad()" value="Cadastrar">
			</div>
		</form>
		</main>
	</body>
</html>
