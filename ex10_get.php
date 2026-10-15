<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>

    <h1>Traitement du formulaire GET</h1>
    <?php
    if (
        isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"]) &&
        trim($_GET["nom"]) !== "" &&
        trim($_GET["prenom"]) !== "" &&
        trim($_GET["groupe"]) !== ""
    ) {
        $nom = htmlspecialchars(
            trim($_GET["nom"]),
            ENT_QUOTES,
            "UTF-8"
        );
        $prenom = htmlspecialchars(
            trim($_GET["prenom"]),
            ENT_QUOTES,
            "UTF-8"
        );
        $groupe = htmlspecialchars(
            trim($_GET["groupe"]),
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