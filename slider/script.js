const music = document.getElementById("music");

// Detectar cuando la pestaña pierde o gana el enfoque
document.addEventListener("visibilitychange", function() {
    if (document.hidden) {
        // Pausar la música cuando se cambia de pestaña o ventana
        music.pause();
    } else {
        // Reanudar la música cuando se vuelve a la pestaña original
        music.play();
    }
});
