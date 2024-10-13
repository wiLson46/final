 function ocultar_divs()
 {
     document.querySelector('#loginSuccess').hidden = true;
     document.querySelector('#loginFail').hidden = true;
 }
 
 function mostrar_div(id_div)
 {
     ocultar_divs();
     if (id_div == "lista") {
         consultar_lista_empleados();
     }
     document.querySelector('#' + id_div).hidden = false;
 }
  