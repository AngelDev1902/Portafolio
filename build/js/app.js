const navbar=document.querySelector(".navbar"),bars=document.querySelectorAll(".bar"),body=document.body,nav=document.querySelector(".nav"),navLinks=document.querySelectorAll(".nav__link"),navBtn=document.querySelectorAll(".nav__btn");let anchoPagina=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth;const submit=document.querySelector("#enviar"),load=document.querySelector(".load"),inputs=document.querySelectorAll(".input"),pCorreo=document.querySelector(".mensajeCorreo");function enviarCorreo(){const e=$(".formulario").serialize();$.ajax({data:e,url:"correo.php",type:"POST",beforeSend:function(){load.classList.add("load-active")},success:function(e){let o=e.split(" ");o=o[o.length-1],"yes"===o?pCorreo.textContent="Mensaje enviado correctamente":(pCorreo.textContent="Error al enviar el mensaje",enviado.classList.add("enviado-error")),enviado.classList.add("enviado-active"),load.classList.remove("load-active"),setTimeout((function(){enviado.classList.remove("enviado-active"),inputs.forEach(e=>{e.value=""})}),3e3)}})}navbar.addEventListener("click",()=>{bars.forEach(e=>{e.classList.toggle("close")}),nav.classList.toggle("nav-active")}),navLinks.forEach(e=>{e.addEventListener("click",()=>{nav.classList.toggle("nav-active"),bars.forEach(e=>{e.classList.remove("close")})})}),navBtn.forEach(e=>{e.addEventListener("click",()=>{nav.classList.toggle("nav-active"),body.classList.remove("body-desactivado"),bars.forEach(e=>{e.classList.remove("close")})})}),anchoPagina<=778&&(navbar.addEventListener("click",()=>{body.classList.toggle("body-desactivado")}),navLinks.forEach(e=>{e.addEventListener("click",()=>{body.classList.remove("body-desactivado")})}),navBtn.forEach(e=>{e.addEventListener("click",()=>{body.classList.remove("body-desactivado")})})),submit.addEventListener("click",e=>{$(".datos-error-p").remove(),e.preventDefault();const o=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;""==$("#nombre").val()||""==$("#correo").val()||""==$("#mensaje").val()?$(".datos-error").html('<p class="datos-error-p">Al menos llene los campos de "Nombre", "Correo" y "Mensaje"</p>'):o.test($("#correo").val())?enviarCorreo():$(".datos-error").html('<p class="datos-error-p">El formato del correo es incorrecto</p>')});