<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body>
        <?php require 'Parts/nav.php'; ?>
        <?php $adminConnect = $_SESSION['utilisateur']; ?>

        <h1 class="text-center text-primary">Bienvenu t'es connecté <?php echo($utilisateur->getNom().' '.$adminConnect['prenom']);?> <br> Tu peux a prèsent ajouter des planètes / vaisseaux </h1>

        <?php require 'Parts/script.html'; ?>
    </body>
</html>
