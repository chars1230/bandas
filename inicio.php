<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select dinámico con PHP y Jquery</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- Optional theme -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    

</head>

<body>
<div class="col-md-8-offsert-md-2">

    <form id="formulario" action="recibe.php" method="post" enctype="multipart/form-data">
        <div class="container">
        <?php include "menu.php";?>
            <div class="page-header text-left">
            
            <div class="alert alert-info"role="alert">
                <h3><strong>Select dinámicos Con PHP, Mysql y Jquery (Ajax)</strong></h3>
            </div>
            <p>Elige un vídeo según la lista de reproducción:</p> <br><br>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <p>Lista de reproducción <br>
                    <br>
                        <select id="lista_reproduccion" name="lista_reproduccion" class="form-control">
                        </select>
                    </p>
                </div>
                <div class="col-md-4">
                    <p>Vídeos <br>
                    <br>
                        <select id="videos" name="video" class="form-control">
                        </select>
                        <i class="fas fa-check-circle"></i>
                    </p>
                    <!--<input type="text" name="valor">-->
                </div>
                <!--<div class="col-md-4">
                   
                <p>Logo
                        <select id="logos" name="logo" class="form-control">
                        </select>
                    </p>
                </div>-->

                </form>

                <div class="col-md-4"> <br>
                
                    <p> <br><input  id="enviar" type="submit" value="Enviar" class="btn btn-info btn-block">
                </div>

        </div>

        <br>
        <br>
    </div>
<section></section>
   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">

    </script>
    <script type="text/javascript" src="js/index.js"></script>
    
    <?php include "footer.php"; ?>

    </div>
</body>

</html>