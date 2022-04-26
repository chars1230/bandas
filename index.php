

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <link rel="icon" href="img/favicon.png"> -->
    <link rel="icon" href="img/carvajal_tys.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select dinámico con PHP y Jquery</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- Optional theme -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
   
</head>

<body>
<div class="col-md-8-offsert-md-2">
    
   
<div class="container">
    <?php include "menu2.php";?>
        
    <form id = "form-session" action="validacion.php"  method="POST">
        <h1>Iniciar session</h1>
                    <div class="page-header text-left">
                    
                    <div class="row  justify-content-center align-items-center">
                        <div class="form-group col-md-6 ">
                            <label for="correo ">USUARIO</label>
                            <input type="text" class="form-control"placeholder=" &#128273;Ingrese su Correo" name="usuario" required>
                        </div>
                    </div>

                    <div class="row  justify-content-center align-items-center">
                        <div class="form-group col-md-6">
                            <label for="password">CONTRASEÑA</label>
                            <input type="password" class="form-control" placeholder="&#128274;ingrese su contraseña"name="clave"required >
                        </div>
                    </div>

                    

                    <div class="row  justify-content-center align-items-center">
                        <div class="col-md-6"><br>
                        <br*>
                            <input type="submit" class="form-control btn btn-primary btn-lg " name ="btningresar" value="Ingresar">
                        </div>
                    </div>

                    <div class="row  justify-content-center align-items-center">
                        <div class="form-group text-center col-md-6">
                            
                            <a href="Registro.html">Si no tienes cuenta puedes registrarte haciendo clic aqui</a>
                        </div>
                    </div>
        
            </form>

        </div>

        <br>
        <br>
   

   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">

    </script>
    <script type="text/javascript" src="js/index.js"></script>
    
    <?php include "footer.php"; ?>
    </div>

    </div>
</body>

</html>
