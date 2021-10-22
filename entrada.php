<?php
require 
    'includes/funciones.php';
    incluirTemplate('header');
?>


<main class="contenedor seccion contenido-centrado">
    <h1>Guía para la decoracion de tu hogar</h1>

    <picture>
        <source src="build/img/destacada2.webp" type="image/webp">
        <source src="build/img/destacada2.jpg" type="image/jpeg">
        <img loagin="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
    </picture>

    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

    <div class="resumen-propiedad">
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