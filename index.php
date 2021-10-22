<?php
require 
    'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img srcset="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Alias, vel. Assumenda, ut tempore. Natus, vero. Alias non possimus autem fuga, maxime porro esse in consectetur excepturi, doloribus deserunt ut? Laudantium?</p>
        </div>
        <div class="icono">
            <img srcset="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Alias, vel. Assumenda, ut tempore. Natus, vero. Alias non possimus autem fuga, maxime porro esse in consectetur excepturi, doloribus deserunt ut? Laudantium?</p>
        </div>
        <div class="icono">
            <img srcset="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Alias, vel. Assumenda, ut tempore. Natus, vero. Alias non possimus autem fuga, maxime porro esse in consectetur excepturi, doloribus deserunt ut? Laudantium?</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y Depas en Venta</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa de Lujo de Lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3,000,000</p>

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
                        <img class="icono" class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncios.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div> <!-- contenido anuncio -->
        </div> <!-- anuncio -->

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa Terminada de Lujo</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3,000,000</p>

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

                <a href="anuncios.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div> <!-- contenido anuncio -->
        </div> <!-- anuncio -->

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa con Alberca</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3,000,000</p>

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

                <a href="anuncios.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div> <!-- contenido anuncio -->
        </div> <!-- anuncio -->

    </div> <!-- contenedor-anuncios -->

    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la Casa de tus Sueños</h2>
    <p>Llena el formulario de contacto y un asesor se podrá en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo">Contactános</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

                    <p>
                        Consejos para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la Decoracion de tu Hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

                    <p>
                        Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimonianales</h3>

        <div class="testimonial">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atencion y la cosa que me ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p> -Juan Diego</p>
        </div>
    </section>
</div>

<?php
incluirTemplate('footer');
?>