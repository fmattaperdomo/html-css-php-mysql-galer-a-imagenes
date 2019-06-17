<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foto</title>
    <link rel="shortcut icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Foto: <?php if (!empty($foto['titulo'])) { echo $foto['titulo']; }else {echo $foto['imagen'];}  ?></h1>

        </div>
    </header>

    <section>
        <div class="contenedor">
            <div class="foto">
                <img src="fotos/<?php echo $foto['imagen'];  ?>"   alt="<?php echo $foto['titulo'];  ?>">
                <p class="texto"><?php echo $foto['texto'];   ?></p>
                <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
            </div>
        </div>
    </section>    
    <footer>
        <p class="copyright">Galeria creada por Francisco Matta Perdomo</p>
    </footer>

    
</body>
</html>