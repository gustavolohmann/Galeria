const add_fotos = document.getElementById("add-fotos");
const container_escolhe_foto = document.querySelector(".container-escolhe-foto");

function drop_menu() {
    container_escolhe_foto.classList.toggle("drop_menu");
}
if (add_fotos) {
    add_fotos.addEventListener("click", drop_menu);
}

// logoff
const btn_logout = document.getElementById("btn-logout");
const power_off = document.querySelector(".power-off");

function show_logoff() {
    power_off.classList.toggle("animation_button_logoff");
}
if (btn_logout) {
    btn_logout.addEventListener("click", show_logoff);
}


