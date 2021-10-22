<?php
require 
    'includes/funciones.php';
    incluirTemplate('header');
?>


<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta Frente al Bosque</h1>

    <picture>
        <source src="build/img/destacada.webp" type="image/webp">
        <source src="build/img/destacada.jpg" type="image/jpeg">
        <img loagin="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio"> $3,000,000 </p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p>4</p>
            </li>
        </ul>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempus venenatis mi. Vivamus id risus
            vitae lacus viverra convallis a sit amet est. Integer sodales urna ligula, sit amet blandit est auctor
            ac. Duis consequat dui elit, in pretium velit faucibus vel. Maecenas lectus diam, tristique nec feugiat
            at, sollicitudin sit amet ex. Duis a ultrices odio. Sed mollis facilisis nisl, sit amet elementum urna
            bibendum ac. In dictum aliquet sapien, eu venenatis nisl imperdiet a. Morbi non metus varius, auctor
            quam id, consectetur magna. Nunc fringilla molestie arcu id lobortis. Duis et erat lorem. In dignissim
            ligula id metus suscipit, sollicitudin congue nulla rhoncus.</p>

        <p>
            Sed ullamcorper eros augue, ut laoreet velit dapibus sagittis. Quisque dui mauris, elementum lobortis
            euismod vitae, blandit nec justo. Praesent ornare posuere diam, sagittis tempus nunc suscipit a. Vivamus
            nibh quam, fringilla quis nibh eu, sollicitudin volutpat ipsum. Aliquam et lacinia ante, ut pulvinar
            velit. Morbi commodo justo sed neque dictum, quis semper ligula rutrum. Donec facilisis faucibus
            condimentum. Integer ante tellus, placerat sed vestibulum nec, sollicitudin nec metus. Duis tempus
            tortor nec imperdiet vehicula. Cras eu mauris eu lacus fringilla ornare. Praesent a sapien quis neque
            convallis lobortis.
        </p>
    </div>
</main>

<?php
incluirTemplate('footer');
?>