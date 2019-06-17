<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galería de Imagenes</title>
    <link rel="shortcut icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Galería de Imagenes</h1>

        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $foto):   ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id']; ?>">
                        <img src="fotos/<?php echo $foto['imagen'];  ?>" alt="<?php echo $foto['titulo']; ?>" >
                    </a>
                </div>
            <?php endforeach;   ?>

            <div class="paginacion">
                <?php if($pagina_actual > 1):  ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
                <?php endif;   ?>

                <?php if($total_paginas !=  $pagina_actual):  ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Página Siguiente<i class="fa fa-long-arrow-right"></i></a>
                <?php endif;   ?>
                
                
            </div>        
        </div>
    </section>
    <footer>
        <p class="copyright">Galeria creada por Francisco Matta Perdomo</p>
    </footer>

    
</body>
</html>