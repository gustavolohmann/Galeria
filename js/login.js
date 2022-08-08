//login no sistema
const container_msn_denied = document.querySelector(".container_msn_denied");
const form = document.querySelector(".form");
const form_login = document.querySelector(".form_login");
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
        }
        if (res["msn_denied"]) {
            container_msn_denied.innerHTML = res["msn_denied"];
        }

    });

}