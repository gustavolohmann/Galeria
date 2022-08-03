<?php
session_start();
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
    <form class="send_img" enctype="multipart/form-data">
        <div class="container-add-imagem">
            <div class="insert_pictures">
                <label type="file" for="foto">Buscar Foto</label>
                <input type="file" name="foto" id="foto" accept="image/*"></input>
                <div class='pre_view'>
                    <img id='pre_view_img' src='' alt='img_'>
                </div>
                <input type="text" name="name" placeholder="nome da foto">
                <button type="submit" name="Insert">Adicionar foto</button>
            </div>
        </div>
    </form>
</div>

<div class="container-galeria">
    <div class="galeria"></div>
</div>
<?php
include_once("footer.php");
?>