<?php
require 
    'includes/funciones.php';
    incluirTemplate('header');
?>


<main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source src="build/img/nosotros.webp" type="image/webp">
                <source src="build/img/nosotros.jpg" type="image/jpeg">
                <img loaging="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempus venenatis mi. Vivamus id risus vitae lacus viverra convallis a sit amet est. Integer sodales urna ligula, sit amet blandit est auctor ac. Duis consequat dui elit, in pretium velit faucibus vel. Maecenas lectus diam, tristique nec feugiat at, sollicitudin sit amet ex. Duis a ultrices odio. Sed mollis facilisis nisl, sit amet elementum urna bibendum ac. In dictum aliquet sapien, eu venenatis nisl imperdiet a. Morbi non metus varius, auctor quam id, consectetur magna. Nunc fringilla molestie arcu id lobortis. Duis et erat lorem. In dignissim ligula id metus suscipit, sollicitudin congue nulla rhoncus.</p>

            <p>Sed ullamcorper eros augue, ut laoreet velit dapibus sagittis. Quisque dui mauris, elementum lobortis euismod vitae, blandit nec justo. Praesent ornare posuere diam, sagittis tempus nunc suscipit a. Vivamus nibh quam, fringilla quis nibh eu, sollicitudin volutpat ipsum. Aliquam et lacinia ante, ut pulvinar velit. Morbi commodo justo sed neque dictum, quis semper ligula rutrum. Donec facilisis faucibus condimentum. Integer ante tellus, placerat sed vestibulum nec, sollicitudin nec metus. Duis tempus tortor nec imperdiet vehicula. Cras eu mauris eu lacus fringilla ornare. Praesent a sapien quis neque convallis lobortis.</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Alias, vel. Assumenda, ut tempore. Natus, vero. Alias non possimus autem fuga, maxime porro esse in consectetur excepturi, doloribus deserunt ut? Laudantium?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Alias, vel. Assumenda, ut tempore. Natus, vero. Alias non possimus autem fuga, maxime porro esse in consectetur excepturi, doloribus deserunt ut? Laudantium?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Alias, vel. Assumenda, ut tempore. Natus, vero. Alias non possimus autem fuga, maxime porro esse in consectetur excepturi, doloribus deserunt ut? Laudantium?</p>
        </div>
    </div>
</section>

<?php
incluirTemplate('footer');
?>