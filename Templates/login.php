<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
	<title>Login</title>
</head>

<body>
	<div class="container_login">
		<div class="container_titulo">
			<div class="container_main_titulo">
				<h1>Aplicativo de foto</h1>
			</div>
		</div>
		<div class="form">
			<div class="container_msn_denied"></div>
			<form class="form_login">
				<div class="input_login">
					<div class="titulo_principal">
						<h1>Login</h1>
					</div>
					<input type="text" name="user" placeholder="Digite seu email" required>
					<input type="password" name="password" placeholder="Digite sua senha" required>
					<button type="submit" id="submit">Entrar</button>
					<div class="link_create">
						<button type="button" id="open_modal">Clique aqui para se cadastra</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="container_modal_cadastro">
		<div class="container_fecha_modal">
			<button id="fecha_modal"><i class="fa-solid fa-xmark"></i></button>
		</div>
		<form class="main_form_cad">
			<div class="cad-form">
				<div class="messages">
					<p id="messages_report"></p>
				</div>
				<input type="text" name="name_user" id="name_user" placeholder="Digite seu email" required>
				<input type="password" name="password" id="password" placeholder="Digite sua senha" required>
				<input type="password" name="pass_confirm" id="pass_confirm" placeholder="Confirme sua senha" required>
				<div class="button_cad_usuario">
					<button id="cad_usuario" type="submit">Cadastar</button>
				</div>
			</div>
		</form>
	</div>
</body>

</html>
<?php
include_once("footer.php");
?>