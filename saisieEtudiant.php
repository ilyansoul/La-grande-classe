<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>formulaire</title>
</head>
<body>
    <?php require_once("entete.php")?>
    <div class="container spacer  col-md-6 col-xs-12">
        <div class="card">
            <div class="card-header">saisie un etudiant</div>
            <div class="card-body">
                <!-- contenue du formulaire -->
                <form method="post" action="saveEtudiant.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label >nom:</label>
                        <input type="text" name="nom" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label >nom</label>
                        <input type="text" name="nom" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label >email:</label>
                        <input type="text" name="email" class="form-control"/>
                    </div>
                    
                    <div class="form-group">
                        <label >photo:</label>
                        <input type="file" name="photo" class="form-control"/>
                    </div>
                    <div>
                        <button type="submit">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>