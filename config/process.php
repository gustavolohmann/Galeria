<?php
session_start();
include_once("conn.php");

/*Tela de login */
function UserAcess($acess, $conn)
{
    if (!empty($acess)) {

        $user = $acess["user"];
        $password = $acess["password"];

        $sql = ("SELECT * FROM usuario WHERE  name = :name AND password = :password");
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":name", $user);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        if ($stmt->rowCount()) {
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($row != 0) {
                foreach ($row as $rows) {
                    extract($rows);
                    $_SESSION["name"] = $name;
                    $_SESSION['id_usuario'] = $id_usuario;
                }
                $login_sucess = ["login" => true];
                return $login_sucess;
            }
        }
        if ($stmt->rowCount() == 0) {
            $msn = "<div class='message_denied'><p id='denied_login'>Dados informados incorretos ou inexistentes! Por favor, verifique os campos obrigatórios e tente novamente!</p>
            </div>";
            $message = ["msn_denied" => $msn];
            return $message;
        }
    }
}

$UserAcess = UserAcess($_POST, $conn);
echo json_encode($UserAcess);
