<?php
session_start();

include_once("conn.php");

function cad_user($data, $conn)
{

    if (!empty($data)) {

        if (isset($data)) {

            $name = $data["name_user"];
            $password = $data["password"];
            $pass_confirm = $data["pass_confirm"];

            if ($password == $pass_confirm) {

                $insert = "INSERT INTO usuario(name,password,pass_confirm)
                VALUES(:name,:password,:pass_confirm)";

                $stmt = $conn->prepare($insert);
                $stmt->bindParam(":name", $name);
                $stmt->bindParam(":password", $password);
                $stmt->bindParam(":pass_confirm", $pass_confirm);

                if ($stmt->execute()) {
                    $message = ["success" => "Cadastro feito com sucesso!"];
                    return $message;
                }
            }
            if ($password != $pass_confirm) {
                $message = ["denied" => "Cadastro negado! Verifique os campos digitados."];
                return $message;
            }
        }
    }
}
$cad_user = cad_user($_POST, $conn);
echo json_encode($cad_user);
