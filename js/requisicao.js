
async function get_fotos() {

    const url = "http://localhost:7000/config/select_fotos.php";

    const req = await fetch(url)
        .then(response => {

            return response.json();

        }).then(imagens => {

            const img_galeria = document.querySelector(".galeria");

            if (imagens) {

                for (let i = 0; i < imagens.length; i++) {

                    if (imagens[i].imagem != "") {

                        img_galeria.innerHTML +=
                            `<img id="img_galeria" src="../img/${imagens[i].imagem}.${imagens[i].tipo}">`;
                    }
                }
            } else {
                img_galeria.innerHTML = '<div><h1>Não tem fotos</h1><div>';
            }
        });
}

// CADASTRA CLIENTE
const main_form_cad = document.querySelector(".main_form_cad");// form

const messages_report = document.getElementById("messages_report");

if (main_form_cad) {
    main_form_cad.addEventListener("submit", async (e) => {

        e.preventDefault();

        const form_user = new FormData(main_form_cad);

        const obj_send = {

            method: "POST",
            body: form_user
        }

        const url = "../config/cadastro.php";
        const req = await fetch(url, obj_send);
        const res = await req.json();

        //messages_report 
        if (res["denied"]) {
            messages_report.style.color = "red";
            messages_report.innerHTML = res["denied"];
        }
        if (res["success"]) {
            messages_report.style.color = "green";
            messages_report.innerHTML = res["success"];
        }

    });
}


//login no sistema

const form_login = document.querySelector(".form_login");
const form = document.querySelector(".form");
if (form_login) {
    form_login.addEventListener("submit", async (e) => {
        e.preventDefault();
        const formLogin = new FormData(form_login);

        const obj_send = {

            method: "POST",
            body: formLogin
        }
        const url = "../config/process.php";
        const req = await fetch(url, obj_send);
        const res = await req.json();
        if (res["login"]) {
            window.location.href = "http://localhost:7000/Templates/index.php";
        } i
        if (res["msn_denied"]) {
            form.innerHTML += res["msn_denied"];
        }

    });

}




//send imagens 
// action="../config/foto.php" method="POST"
const send_img = document.querySelector(".send_img");
const pre_view_img = document.getElementById("pre_view_img");
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

        if (res["img"]) {
            console.log(res["img"]); // ["full_path"]
            pre_view_img.src = "../" + res["img"]["tmp_name"] + "/" + res["img"]["full_path"];
        }
        if (res["denied"]) {
            console.log(res["denied"]);
        }
    });
}

