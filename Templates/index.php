<?php
session_start();
if (!$_SESSION["name"] && !$_SESSION['id_cliente']) {
    header("LOCATION:../Templates/login.php");
}
include_once("header.php");
?>
<div class="container-form-imagem">
    <div class="button-add-foto">
        <button type="button" id="add-fotos"><i class="fa-solid fa-plus"></i></button>
    </div>
    <div class="container-escolhe-foto">
        <div class="container-form-escolhe-foto">
            <div class="button-escolhe-foto">
                <button>Usar camera</button>
            </div>
            <div class="modal_add_foto">
                <button type="button" id="button_modal_add_foto">Adicionar foto</button>
            </div>
        </div>
    </div>
</div>
<div class="container_send_img">
    <div class="container_button_fecha_modal_fotos">
        <button id="fecha_modal_fotos"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <form class="send_img" enctype="multipart/form-data">
        <div class="msn_form_"></div>
        <div class="container-add-imagem">
            <div class="insert_pictures">
                <div>
                    <label id="get_foto" type="file" for="foto"><i class="fa-solid fa-plus"></i></label>
                    <input type="file" name="foto" id="foto" value="" accept="image/*"></input>
                </div>
                <div class='pre_view'>
                    <img id='pre_view_img' src='' alt=''>
                </div>
                <div>
                    <input type="text" name="name" placeholder="nome da foto">
                    <button type="file" name="Insert">Adicionar foto</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="container_modal_show_img">
    <div class="button_hidden_container_modal_show_img">
        <button id="button_hidden_container_modal_show_img" type="button"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="_modal_show_img">
        <img id="img_modal_view" src="" alt="">
    </div>
</div>
<div class=" container-galeria">
    <div class="galeria"></div>
</div>
<?php
include_once("footer.php");
?>