document.addEventListener("keyup", e=>{

    if (e.target.matches("#buscador")){
  
        if (e.key ==="Escape")e.target.value = ""
  
        document.querySelectorAll(".tarjeta-rest").forEach(fruta =>{
  
            fruta.textContent.toLowerCase().includes(e.target.value.toLowerCase())
              ?fruta.classList.remove("<?php  echo $resultado['nombre_producto'];?>")
              :fruta.classList.add("<?php  echo $resultado['nombre_producto'];?>")
        })
  
    }
  
  
  })