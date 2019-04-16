<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convertisseur Nombre Romain en Nombre Arabe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type='text/javascript' >
        document.queryse
    </script>

</head>
<body>
    
<?php

require_once("convertisseurYvette.php");

?>
<div class="card mx-auto mt-5 bg-warning" style="width: 40rem;">
  
  <div class="card-body">
     <form class="container " action="" method="post">
            <div class="form-group row">
                <label for="Romain" class="col-6 text-right">Nombre Romain</label>
                <input type="text" class="form-control col-6" id="Romain" placeholder="Entre un nombre romain" name=romain value="<?php if($_POST) echo $_POST['romain'];?>">
            
            </div>
            <div class="form-group row">
                <label for="Arabe" class="col-6 text-right">Nombre Arabe</label>
                <input type="text" class="form-control col-6" id="Arabe" value="<?php if($_POST) echo Convertir($_POST['romain']);?>">
            </div>
            
            <button type="submit" class="btn btn-danger" >Convertir</button>
        </form>
  </div>
</div>
   


</body>
</html>