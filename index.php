<?php
require './principal/head.php';
?>

<body>
    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <img src="./assets/images/operaciones.png" alt="" srcset="">
                    <label style="margin-top: 25px; font-weight: bold; font-size: 17px;">¿Qué son las matrices?</label>
                </div>
                <div class="enlaces-header">
                    <!-- <button type="button" class="btn btn-outline-success btn-lg button-operaciones"> -->
                        <a style="text-decoration: none;" href="./operaciones/view/view_operaciones.php">Ir a la herramienta</a>
                    <!-- </button> -->
                </div>
                <div class="hamburguer">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </section>
        </nav>
        <div class="contenedor">
            <section class="contenido-header">
                <section class="textos-header">
                    <h1>¿Qué son las matrices?</h1>
                    <p>Una matriz de números es una estructura de datos que se compone de elementos numéricos dispuestos en filas y columnas en forma de tabla rectangular. Cada elemento de la matriz es identificado por su posición, que se indica mediante un par de índices que indican la fila y la columna a la que pertenece.</p>
                    <a style="text-decoration: none;" href="http://cimanet.uoc.edu/cursMates0/IniciacionMatematicas/s5/1_5_2.html">Leer mas</a>
                </section>
                <img src="./assets/images/matriz.png" alt="">
            </section>
        </div>
    </header>
    <section class="about-us">
        <div class="contenedor1">
            <h2 class="titulo">Operaciones realizables con matrices</h2>
            <div class="contenedor-articulo">
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fa-solid fa-plus"></i>
                    <h3>Suma y resta</h3>
                    <p>Dos matrices del mismo tamaño se pueden sumar o restar componente a componente.</p>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fa-solid fa-xmark"></i>
                    <h3>Multiplicación</h3>
                    <p>Dado un par de matrices, se pueden multiplicar siempre y cuando el número de columnas de la primera matriz sea igual al número de filas de las segunda matriz.</p>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fa-solid fa-calculator"></i>
                    <h3>Transposición</h3>
                    <p>Consiste en intercambiar filas y columnas de una matriz.</p>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fa-solid fa-calculator"></i>
                    <h3>Determinantes</h3>
                    <p>Es un número que se puede calcular para una matriz cuadrada y se utiliza para resolver sistemas de ecuaciones lineales.</p>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fa-solid fa-plus-minus"></i>
                    <h3>Inversas</h3>
                    <p>Solo se puede calcular para una matriz cuadrada invertible y se utiliza para resolver sistemas de ecuaciones lineales.</p>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fa-solid fa-calculator"></i>
                    <h3>Descomposición</h3>
                    <p>Se puede descomponer una matriz en factores tales como la factorización LU, la factorización QR y la factorización de valores singulares.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="questions contenedor">
        <section class="textos-questions">
            <h1>Acerca de</h1>
            <p>El propósito de esta página es proporcionar una plataforma donde los usuarios puedan aprender y practicar los conceptos matriciales de manera clara y concisa, a través de ejercicios resueltos por la herramienta. Espero que esta página sea una ayuda valiosa para aquellos que buscan mejorar sus habilidades matriciales y alcanzar sus objetivos académicos.</p>
            <a style="width: 300px; text-decoration: none;" href="./operaciones/view/matriz_n.php">Ir a la herramienta</a>
        </section>
        <img src="./assets/images/op.png" alt="" data-aos="zoom-out-up" data-aos-duration="2000">
    </section>
</body>


<?php
require './principal/footer.php';
?>