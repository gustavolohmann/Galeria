
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