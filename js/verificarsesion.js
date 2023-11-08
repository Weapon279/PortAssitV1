function verificarSesion() {
    if (!localStorage.getItem("usuario")) {
        alert("inicia sesión para acceder al mapa.");
    }
}
