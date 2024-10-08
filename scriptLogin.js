document.addEventListener("DOMContentLoaded", function() {
    ocultar_divs();
    const form = document.querySelector("#1");
    form.addEventListener('submit', function(event){
      event.preventDefault();
      const datosFormulario = new FormData(form);
      const url = form.action;
      fetch(url, {method: "POST", body: datosFormulario})
         .then(respuesta => respuesta.json())
         .then( datos => { mostrarResultados(datos); })
         .catch( error => {console.log(error);});
    });
 });
 
 function ocultar_divs()
 {
     document.querySelector('#alta').hidden = true;
     document.querySelector('#lista').hidden = true;
 }
 
 function mostrar_div(id_div)
 {
     ocultar_divs();
     if (id_div == "lista") {
         consultar_lista_empleados();
     }
     document.querySelector('#' + id_div).hidden = false;
 }
  