function loadContent(url, cont, callback) {
    
    const centro = document.querySelector(cont);
    // Hacer la solicitud para cargar el contenido de la página
    fetch(url)
    .then(response => response.text())
    .then(data => {
        // Reemplazar el contenido de la sección .centro
        centro.innerHTML = data;
        // Cargar e inicializar el gráfico después de que el contenido haya sido insertado
        if (callback) {
            callback(); // Ejecutar el callback después de cargar el contenido
        }
    })
    .catch(error => {
        console.error('Error al cargar el contenido:', error);
        centro.innerHTML = "<p>Error al cargar el contenido.</p>";
    });
}