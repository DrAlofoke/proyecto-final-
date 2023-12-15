document.addEventListener('DOMContentLoaded', function () {
    // Simula la carga de datos desde una fuente externa (base de datos, API, etc.)
    const libros = [
        { titulo: 'Libro 1', autor: 'Autor 1' },
        { titulo: 'Libro 2', autor: 'Autor 2' },
        { titulo: 'Libro 3', autor: 'Autor 3' },
        // Agrega más libros según sea necesario
    ];

    const listaLibros = document.getElementById('lista-libros');

    // Agrega cada libro a la lista
    libros.forEach(libro => {
        const li = document.createElement('li');
        li.innerHTML = `<strong>${libro.titulo}</strong> - ${libro.autor}`;
        listaLibros.appendChild(li);
    });
});