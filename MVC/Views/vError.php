
<!-- Page d'erreur -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur</title>
</head>
<body>
<div style="color: red; background-color: yellow"><h1>Erreur!! </h1>
<hr /><br />

<b>Une erreur est survenue: <?= $variables["message"] ?></b> <br /><br />
</div>
<hr /><br /><br />
<b><a href ="javascript: history.go(-1)">Retour</a></b>
    
</body>
</html>