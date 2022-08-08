<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Galeria</title>
</head>

<body onload="get_fotos();">
    <header>
        <div class="container-logoff">
            <div class="button-logout">
                <button type="submit" name="btn-logout" id="btn-logout"><i class="fa-solid fa-gear"></i></button>
            </div>
            <div class="power-off">
                <form class="destruir_sessao" action="../config/destruir.php" method="POST">
                    <?php if (isset($_SESSION["name"])) : ?>
                        <input type="hidden" id="name_sessio" name="name_sessio" value="<?php echo $_SESSION["name"]; ?>">
                    <?php endif; ?>
                    <button name="button_delete_session" id="button_delete_session" type="submit"><i class="fa-solid fa-power-off"></i>&nbsp;Sair</button>
                </form>
            </div>
        </div>
        <div class="cabecalho">
            <div class="nome-cabecalho">
                <?php if (isset($_SESSION["name"])) : ?>
                    <h2>Bem vindo, <?php echo $_SESSION["name"]; ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </header>