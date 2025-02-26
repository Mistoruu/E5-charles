
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: connexion.php");
    exit();

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "navbar.php"?>
    <header>
        <div class="header-container">
            <h2>Bienvenue <?php echo htmlspecialchars($_SESSION['username']); ?> ! &nbsp;&nbsp;</h2>
            <form>
                <button type="submit" name="logout" class="logout-button">Se déconnecter</button>
            </form>
        </div>
    </header>
    <main>
        <p>Ceci est la page d'accueil de l'appli</p>
    </main>
    <?php include "footer.php" ?>
</body>
</html>

