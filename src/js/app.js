const navbar = document.querySelector(".navbar");
const bars = document.querySelectorAll(".bar");
const body = document.body;
const nav = document.querySelector(".nav");
const navLinks = document.querySelectorAll(".nav__link");
const navBtn = document.querySelectorAll(".nav__btn");
let anchoPagina = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
const submit = document.querySelector("#enviar");
const load = document.querySelector(".load");
const inputs = document.querySelectorAll(".input");
const pCorreo = document.querySelector('.mensajeCorreo');

navbar.addEventListener("click", () => {
    bars.forEach(bar => {
        bar.classList.toggle("close"); 
    });

    nav.classList.toggle("nav-active");
});

navLinks.forEach(link => {
    link.addEventListener("click", () => {
        nav.classList.toggle("nav-active");

        bars.forEach(bar => {
            bar.classList.remove("close"); 
        });
    });
});

navBtn.forEach(btn => {
    btn.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        body.classList.remove("body-desactivado");

        bars.forEach(bar => {
            bar.classList.remove("close"); 
        });
    });
});

if (anchoPagina <= 778){
    navbar.addEventListener("click", () => {
        body.classList.toggle("body-desactivado");
    });
    
    navLinks.forEach(link => {
        link.addEventListener("click", () => {
            body.classList.remove("body-desactivado");
        });
    });
    
    navBtn.forEach(btn => {
        btn.addEventListener("click", () => {
            body.classList.remove("body-desactivado");
        });
    });
}

submit.addEventListener('click', (event) => {
    $('.datos-error-p').remove();
    event.preventDefault();

    const patronCorreo = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if($('#nombre').val() == '' || $('#correo').val() == '' || $('#mensaje').val() == '') {
        $('.datos-error').html(`<p class="datos-error-p">Al menos llene los campos de "Nombre", "Correo" y "Mensaje"</p>`);
    }else{

        if (patronCorreo.test($('#correo').val())) {
            enviarCorreo();
        } else {
            $('.datos-error').html(`<p class="datos-error-p">El formato del correo es incorrecto</p>`);
        }
    }
});

function enviarCorreo(){
    const datos = $(".formulario").serialize();

    $.ajax({
        data: datos,
        url: 'correo.php',
        type: "POST",

        beforeSend: function(){
            load.classList.add('load-active');
        },

        success: function(mensaje){

            let palabra = mensaje.split(" ");
            palabra = palabra[palabra.length - 1];

            if (palabra === 'yes') {
                pCorreo.textContent = "Mensaje enviado correctamente";
            }else{
                pCorreo.textContent = "Error al enviar el mensaje";
                enviado.classList.add('enviado-error');
            }


            enviado.classList.add("enviado-active");
            load.classList.remove("load-active");

            setTimeout(function() {
                enviado.classList.remove("enviado-active");
                
                inputs.forEach(input => {
                    input.value = ""
                });

            }, 3000);
        }
    });
}

