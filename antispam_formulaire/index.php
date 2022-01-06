<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antispam</title>
</head>
<body>
<form action="traitement.php" method="post">
    <p>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </p>
    <p>
        <label for="sujet">Sujet :</label>
        <input type="text" id="sujet" name="sujet">
    </p>
    <p>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
    </p>
    <p>
        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea>
    </p>

    <input type="hidden" name="raison">
    <button>Envoyer</button>
</form>
    
</body>
</html>