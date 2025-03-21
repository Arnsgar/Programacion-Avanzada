  // Verificar si hay una animación en progreso y continuarla
  let startTime = localStorage.getItem("animationStartTime");
  let elapsedTime = startTime ? Date.now() - startTime : 0;
  let duration = 40000; // 40 segundos

  document.body.style.animation = `colorShift ${duration}ms infinite alternate ease-in-out`;
  document.body.style.animationDelay = `-${elapsedTime}ms`; // Corrige la animación al estado guardado

  // Guardar el tiempo cuando se inicia la animación
  localStorage.setItem("animationStartTime", Date.now());