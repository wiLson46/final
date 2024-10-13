console.log("entra 1");

document.addEventListener("DOMContentLoaded", function () {
    ocultar_divs();
});

function ocultar_divs() {
    console.log("entra 2");
    document.querySelector('#loginSuccess').hidden = true;
    document.querySelector('#loginFail').hidden = true;
}

function mostrar_div(id_div) {
    ocultar_divs();
    if (id_div == "loginSuccess") {
        document.querySelector('#' + id_div).hidden = false;
    } else {
        document.querySelector('#' + id_div).hidden = false;
    }
}