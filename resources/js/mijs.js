//  aqui hacemos que el mensaje de confirmacion desaparezca en 5 segundo
setTimeout(() => {
  let obj = document.getElementById('mensaje');
  if (obj) {
    obj.style.display = 'none'; //esto hace que aparezca el mensaje,si lo comentamos ya no aparece
  }
  
 });// , 5000