<?php
session_start();
include_once("../config/conn.php");
$data = $_GET;
function select_foto($data, $conn)
{
    if (isset($data)) {
        $id_cliente = $_SESSION['id_cliente'];

        $select_img = ("SELECT * FROM fotos WHERE id_cliente_fk = :id_cliente");
        $stmt = $conn->prepare($select_img);
        $stmt->bindParam(":id_cliente", $id_cliente);
        $stmt->execute();

        if ($stmt->rowCount()) {

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($rows) {

                foreach ($rows as $row) {
                    extract($row);
                    $imagens = $imagem . "." . $tipo;
                    $img .= "<img id='img_galeria' src='../img/$imagens'/>";
                    $img_c = ["img" => $img];
                }
                return $img_c;
            }
        }
        if (!$stmt->rowCount()) {
            $denied = ["denied" => "<div class='img_empty'><h1>Sem fotos</h1><img id='' src='../img/semfoto.png' alt=''></div>'"];
            return $denied;
        }
    }
}
$select_foto = select_foto($data, $conn);
echo json_encode($select_foto);
