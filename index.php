<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafo Form</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--STYLE.css  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     
     <a href="./index.html">
        Vai alla Home
     </a>
    
    <!-- Inizio Main -->
    <main>
        <div class="container text-center">
            <h2>
                Paragrafo Originale
            </h2>
            <p> 
                <?php echo $_GET['paragraph']  ?>
            </p>
            <div>
                <?php echo ucfirst('Lunghezza: ')?> <?php echo strlen($_GET['paragraph'])?>
            </div>
        </div>
        <div class="container text-center">
            <h2>
                Paragrafo Censurato
            </h2>
            <p>
            <?php echo str_replace($_GET['badWord'],'***',$_GET['paragraph'])?>
            </p>
            <div>
            <?php echo ucfirst('Lunghezza dopo censura: ')?> <?php echo strlen($_GET['paragraph'])?>
            </div>
        </div>
    </main>
    <!-- Fine Main -->
    
    

    <script src="js/scripts.js" type="text/javascript"></script>
</body>
</html>