<?php
require_once("connexion.php");
$req = "SELECT * FROM Etudiants";
$ps = $pdo->prepare($req);
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <?php require_once("entete.php");?>
    <div class="col-md-12 col-xs-12 spacer">
        <div class="card spacer">
            <div class="card-header">la liste des etudiants</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nom</th>
                            <th>email</th>
                            <th>photo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($et=$ps->fetch()){?>
                        <tr>
                            <td><?php echo($et['code'])?></td>
                            <td><?php echo($et['nom'])?></td>
                            <td><?php echo($et['email'])?></td>
                            <td><?php echo($et['photo'])?></td>
                            <td>modifier</td>
                            <td>supprimer</td>
                        </tr>
                        <?php   }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>


