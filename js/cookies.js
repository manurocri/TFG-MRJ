function ocultar(){
    
   var objeto1=document.getElementById('obj1')
   objeto1.innerHTML=""
   
    }

    var botonAceptarCookies = document.getElementById("botonAceptarCookies")
    var botonRechazarCookies = document.getElementById("botonRechazarCookies")
    
    
    botonAceptarCookies.addEventListener("click", ocultar)
    botonRechazarCookies.addEventListener("click", ocultar)