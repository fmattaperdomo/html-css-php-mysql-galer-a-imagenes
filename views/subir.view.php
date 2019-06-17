<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Foto</title>
    <link rel="shortcut icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir Foto</h1>

        </div>
    </header>

    <section>
        <div class="contenedor">
            <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post" enctype="multipart/form-data">
                <label for="foto">Selecciona tu foto</label>
                <input type="file" id="foto" name="foto">

                <label for="titulo">Titulo de la foto</label>
                <input type="text" id="titulo" name="titulo">

                <label for="texto">Descripción:</label>                
                <textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

                <?php if (isset($error)):  ?>
                    <p class="error"><?php echo $error; ?></p>      
                <?php endif; ?>

                <input type="submit" class="submit" value="Subir foto">

            </form>
        </div>
    </section>    
    <footer>
        <p class="copyright">Galeria creada por Francisco Matta Perdomo</p>
    </footer>

    
</body>
</html>