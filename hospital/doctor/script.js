// Función para mostrar/ocultar la barra de navegación desplegable
document.addEventListener('DOMContentLoaded', function () {
    var dropdownBtn = document.querySelector('.dropdown-btn');
    var dropdownContent = document.querySelector('.dropdown-content');
    
    dropdownBtn.addEventListener('click', function() {
        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
        } else {
            dropdownContent.style.display = 'block';
        }
    });
});
