// Obtiene el modal y el botón que lo abre
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");

// Obtiene el botón que cierra el modal
var span = document.getElementsByClassName("close")[0];

// Al hacer clic en el botón, se abre el modal
btn.onclick = function() {
    modal.style.display = "block";
}

// Al hacer clic en el span (x), se cierra el modal
span.onclick = function() {
    modal.style.display = "none";
}

// Al hacer clic fuera del modal, se cierra
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Agrega el manejador de eventos al formulario de inicio de sesión
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que la página se recargue
    // Aquí puedes agregar el código para validar las credenciales del usuario
    alert("Iniciando sesión...");
    modal.style.display = "none"; // Cierra el modal
});