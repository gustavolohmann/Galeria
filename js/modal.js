const fecha_modal = document.getElementById("fecha_modal");
const open_modal_container = document.getElementById("open_modal");
const container_modal_cadastro = document.querySelector(".container_modal_cadastro ");

function open_modal() {
    container_modal_cadastro.classList.add("modal");
}
if (open_modal_container) {
    open_modal_container.addEventListener("click", open_modal);
}


function hidden_modal() {
    container_modal_cadastro.classList.remove("modal")
}
if (fecha_modal) {
    fecha_modal.addEventListener("click", hidden_modal);
}


const button_modal_add_foto = document.getElementById("button_modal_add_foto");
const container_send_img = document.querySelector(".container_send_img");
const fecha_modal_fotos = document.getElementById("fecha_modal_fotos");

function open_modal_foto() {
    container_send_img.classList.add("animation_modal_add_foto");
}
if (button_modal_add_foto) {
    button_modal_add_foto.addEventListener("click", open_modal_foto);
}

function hidden_modal_add_fotos() {
    container_send_img.classList.remove("animation_modal_add_foto");
}
if (fecha_modal_fotos) {
    fecha_modal_fotos.addEventListener("click", hidden_modal_add_fotos);
}
