<?php
session_start();
include_once("conn.php");
$data = $_POST;
function destruir_sessao($data)
{
    if (!empty($_SESSION["name"])) {
        if ($data["name_sessio"] == $_SESSION["name"]) {
            session_destroy();
            unset($_SESSION["name"]);
            header("LOCATION:http://localhost:7000/Templates/login.php");
        }
    }
}
destruir_sessao($_POST);
