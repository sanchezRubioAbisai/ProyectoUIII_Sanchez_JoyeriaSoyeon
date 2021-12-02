<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Joyeria Soyeon</title>
</head>

<?php include('header.php'); ?>
<section class="main">
    <div class="wrapp">
        <div class="mensaje">
            <h1>Lo ultimo en Joyas y accesorios...Solo en Soyeon</h1>
        </div>

        <!-- <div class="articulo">
            <article class="article1">
                <img src="img/art1.jfif" class="joya2" alt="">
                <div class="texto-art1">
                    <h2>Nueva Joyería</h2>
                    <p>Nuestra joyería más nueva demuestra la creatividad de Tiffany y una calidad de diseño inimitable.</p>
                </div>
            </article>
        </div>

        <article class="article2">
            <img src="img/art2.jfif" class="joya1" alt="">
            <div class="texto-art2">
                <h2>Colecciones Tiffany</h2>
                <p>Descubra las colecciones de joyería con los diseños más icónicos de Tiffany.</p>
            </div>
        </article>
    </div> -->
        <div class="contenedor-inicio">
            <div class="articulos">

                <div class="article">
                    <div class="article-texto">
                        <h2>Nuestra Joyería</h2>
                        <p>Nuestra Joyeria mas nuevo demuestra la creatividad de Soyeon y una calidad de diseño inigualable</p>
                    </div>
                    <img src="img/art1.jfif" alt="">
                </div>
                <div class="article2">
                    <div class="article-texto">
                        <h2> Estamos a la vanguardia</h2>
                        <p>Con nosotros obtendras los ultimos diseños, hechos por diseñadores reconocidos mundialmente</p>
                    </div>
                    <img src="img/art1.jfif" alt="">
                </div>
            </div>
            <?php include('sidebar.php'); ?>
        </div>
    </div>

</section>
<?php include('footer.php'); ?>
</body>

</html>
