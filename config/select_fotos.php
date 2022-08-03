<?php

include_once("../config/conn.php");
$data = $_GET;
function select_foto($data, $conn)
{

    $select_img = ("SELECT imagem,tipo FROM fotos");
    $stmt = $conn->prepare($select_img);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$select_foto = select_foto($data, $conn);
echo json_encode($select_foto);
