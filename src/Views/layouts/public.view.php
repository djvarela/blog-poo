
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/src/assets/css/normalize.css">
    <link rel="stylesheet" href="/src/assets/css/style.css">
    <?php echo isset($clase['css']) ?  $clase['css'] : null ?>
    

   
    <title><?php echo isset($clase['data']) ?  $clase['data']['TITULO_POST'] .'|' : null  ?> La Roca del Consejo</title>
</head>

<body>
    <section class="content">
        <?php include($vista) ?>
    </section>
</body>

</html> 

