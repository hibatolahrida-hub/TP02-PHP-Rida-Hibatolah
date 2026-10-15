<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>

<body>
    <?php

    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixUnitaire = 60;
    $quantite = 3;

    $totalHT = $prixUnitaire * $quantite;

    $montantTVA = $totalHT * TAUX_TVA / 100;

    $totalTTC = $totalHT + $montantTVA;

    $totalTTC += 15;

    ?>

    <h2>Récapitulatif</h2>

    <p>PrixUnitaireHT : <?php echo $prixUnitaire . " " . DEVISE; ?></p>

    <p>Quantité : <?php echo $quantite; ?></p>

    <p>TotalHT : <?php echo $totalHT . " " . DEVISE; ?></p>

    <p>TVA : <?php echo $montantTVA . " " . DEVISE; ?></p>

    <p>TotalTTC : <?php echo $totalTTC - 15 . " " . DEVISE; ?></p>

    <p>Frais de livraison : 15 <?php echo DEVISE; ?></p>

    <p><strong>Montant final : <?php echo $totalTTC . " " . DEVISE; ?></strong></p>

    <?php

    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA existe.</p>";
    }
    ?>

</body>
</html>