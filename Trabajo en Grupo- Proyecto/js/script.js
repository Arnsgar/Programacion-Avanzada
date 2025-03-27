//Configuracion de la animacion de fondo
document.addEventListener("DOMContentLoaded", function () {
  let duration = 40000; // 40 segundos

  // Verificar si hay un tiempo guardado, si no, establecerlo
  if (!localStorage.getItem("animationStartTime")) {
      localStorage.setItem("animationStartTime", Date.now());
  }

  let startTime = parseInt(localStorage.getItem("animationStartTime"), 10);
  let elapsedTime = Date.now() - startTime;

  // Aplicar la animación con la corrección del tiempo transcurrido
  document.body.style.animation = `colorShift ${duration}ms infinite alternate ease-in-out`;
  document.body.style.animationDelay = `-${elapsedTime % duration}ms`; // Evita valores fuera del rango
});


  //Validar informacion de formulario
  document.addEventListener("DOMContentLoaded", function () {
    const form= document.querySelector("form");
    const user= document.getElementById( "user" );
    const password= document.getElementById( "password" );

    form.addEventListener("submit", function (event) {
      let errorMessage="";
      let valid= true;
      

      if(user.value.length < 5|| user.value.length > 50){
        valid=false;
        errorMessage+="El nombre de usuario/correo debe contener entre 5 y 50 caracteres \n \n"
      }

      const passwordRegex= /^(?=.*[A-Z])(?=.*\d).{8,50}$/;
      if(!passwordRegex.test(password.value)){
        valid=false;
        errorMessage+="La contraseña debe tener entre 8 y 50 caracteres, una mayúscula y un número \n";
      }

      if(!valid){
        event.preventDefault();
        alert(errorMessage);
    }
    
  });
  });


  