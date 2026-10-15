<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement POST</title>
</head>
<body>
    <h1>Traitement du formulaire POST</h1>
    <?php
    if (
        isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"]) &&
        trim($_POST["nom"]) !== "" &&
        trim($_POST["prenom"]) !== "" &&
        trim($_POST["groupe"]) !== ""
    ) {
        $nom = htmlspecialchars(
            trim($_POST["nom"]),
            ENT_QUOTES,
            "UTF-8"
        );
        $prenom = htmlspecialchars(
            trim($_POST["prenom"]),
            ENT_QUOTES,
            "UTF-8"
        );
        $groupe = htmlspecialchars(
            trim($_POST["groupe"]),
            ENT_QUOTES,
            "UTF-8"
        );
        echo "Bienvenue " . $prenom . " " . $nom . "<br>";
        echo "Groupe : " . $groupe;
    } else {
        echo "Veuillez remplir tous les champs.";
    }
    ?>
</body>
</html>