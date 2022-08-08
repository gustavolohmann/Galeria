<?php
session_start();
include_once("conn.php");
$imagem = $_FILES['foto']; // arquivo img
$data = $_POST; // verbo post
$local_upload = "../img"; // caminho onde devo guardar
$local = $imagem["tmp_name"];  // local do servidor
$tipo  = str_replace('/', '', substr($imagem['type'], -4)); // tipo do arquivo
$nome_imagem = str_replace(" ", "", $data['name']);


function verify_before_upload($tipo, $local, $local_upload, $data, $conn, $imagem)
{
    if (!$imagem["size"]) {
        $msn_denied = (["denied" => "<p id='denied_arq'> Não foi anexado nenhuma imagem </p> "]);
        return $msn_denied;
    }
    if ($imagem["size"]) {
        $img_upload = img_upload($tipo, $local, $local_upload, $data, $imagem, $conn);
        return $img_upload;
    }
}
$verify_before_upload = verify_before_upload($tipo, $local, $local_upload, $data, $conn, $imagem);
echo json_encode($verify_before_upload);
function img_upload($tipo, $local, $local_upload, $data, $imagem, $conn)
{
    if (!empty($imagem)) {

        $id_cliente_fk = $_SESSION['id_cliente'];
        $nome = $imagem['name'] = $data['name']; // renomeia o arquivo
        $nome_imagem = str_replace(" ", "", $nome);

        $insertImg = ("INSERT INTO fotos (id_cliente_fk,imagem,tipo) VALUES(:id_cliente_fk,:imagem,:tipo)");
        $stmt = $conn->prepare($insertImg);
        $stmt->bindParam(":id_cliente_fk", $id_cliente_fk);
        $stmt->bindParam(":imagem", $nome_imagem);
        $stmt->bindParam(":tipo", $tipo);

        if ($stmt->execute()) {
            move_uploaded_file($local, "$local_upload/$nome_imagem" . "." . $tipo); // move o arquivo
            $success =  ["success" => "<p id='msn_success_form_img'>Imagem salva com sucesso!</p>"];
            return $success;
        }
    }
}
