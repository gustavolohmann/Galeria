const galeria = document.querySelector(".galeria");
async function get_fotos() {

    const url = "../config/select_fotos.php";

    const req = await fetch(url);
    const res = await req.json();

    if (res["img"]) {

        galeria.innerHTML += res["img"];

        const img_modal_view = document.getElementById("img_modal_view");
        const container_modal_show_img = document.querySelector(".container_modal_show_img");
        const size = galeria.childElementCount;
    
        for (let index = 0; index < size; index++) {

            galeria.childNodes[index].addEventListener("click", () => {

                container_modal_show_img.classList.add("class_animation_container_modal_show_img");
                img_modal_view.src = galeria.childNodes[index]["src"];

            });
          
        }
        const button_hidden_container_modal_show_img = document.getElementById("button_hidden_container_modal_show_img");

        function hidden_() {

            container_modal_show_img.classList.remove("class_animation_container_modal_show_img");

        }

        button_hidden_container_modal_show_img.addEventListener("click", hidden_);
    }
    if (res["denied"]) {
        galeria.innerHTML = res["denied"];
    }
}

//pre view
const get_foto = document.getElementById("get_foto"); // label
const pre_view_img = document.getElementById("pre_view_img"); // imagem
const foto = document.getElementById("foto"); // input

get_foto.addEventListener("click", (event) => {
    foto.click();
});

foto.addEventListener("change", () => {
    let file = new FileReader();
    file.onload = function () {
        pre_view_img.src = file.result;
        console.log(file);
    }

    file.readAsDataURL(foto.files[0]);

});

//send imagens 
const send_img = document.querySelector(".send_img");
const msn_form_ = document.querySelector(".msn_form_");
if (send_img) {
    send_img.addEventListener("submit", async (e) => {
        e.preventDefault();

        const form_img = new FormData(send_img);
        const obj_img = {
            method: "POST",
            body: form_img
        }

        const url = "../config/foto.php";
        const req = await fetch(url, obj_img);
        const res = await req.json();

        if (res["success"]) {
            msn_form_.innerHTML = res["success"];
        }
        if (res["denied"]) {
            msn_form_.innerHTML = res["denied"];
        }
    });
}



