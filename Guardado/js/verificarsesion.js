function verificarSesion() {
    // Verifica si el usuario está logueado
    if (!localStorage.getItem("usuario")) {
        // Si el usuario no está logueado, muestra un mensaje de error
        alert("Debes iniciar sesión para acceder al mapa.");
    }
}
