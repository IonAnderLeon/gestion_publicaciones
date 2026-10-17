<?php

require_once __DIR__ . '/src/Library/Publication.php';
require_once __DIR__ . '/src/Library/Book.php';
require_once __DIR__ . '/src/Library/Magazine.php';

use App\Library\Book;
use App\Library\Magazine;

$book = new Book("Hyperior", "Dan Brown", 1998, 651);
$magazine = new Magazine("National Geographic", "Sergio Parra", 2026, 2);

$escape = static fn (string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ejemplo de publicaciones en PHP: un libro y una revista.">
    <title>Gestión de publicaciones</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header class="site-header">
        <a class="site-name" href="#inicio">Gestión de Pulbicaciones</a>
        <p class="site-subtitle">Publicaciones, autores y ediciones.</p>
    </header>

    <nav class="project-nav" aria-label="Navegación de publicaciones">
        <ul class="nav-list">
            <li><a href="#libro">El libro</a></li>
            <li><a href="#revista">La revista</a></li>
        </ul>
    </nav>

    <main class="page-content" id="inicio">
        <section class="project-section" aria-labelledby="publicaciones-heading">
            <div class="section-heading">
                <h2 id="publicaciones-heading">Publicaciones</h2>
                <p>Dos ejemplos de herencia y namespaces en PHP.</p>
            </div>

            <div class="project-grid">
                <article class="project-card publication-card" id="libro">
                    <span class="project-tag">Libro</span>
                    <h3 class="project-title"><?= $escape($book->title) ?></h3>
                    <p class="project-description"><?= $escape($book->mostrarInfo()) ?></p>
                </article>

                <article class="project-card publication-card" id="revista">
                    <span class="project-tag">Revista</span>
                    <h3 class="project-title"><?= $escape($magazine->title) ?></h3>
                    <p class="project-description"><?= $escape($magazine->mostrarInfo()) ?></p>
                </article>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <p class="site-subtitle">Ion Ander León · Desarrollo Web Entorno Cliente · 2026-27</p>
        <a href="https://github.com/IonAnderLeon">GITHUB</p>
    </footer>
</body>
</html>