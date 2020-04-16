<html>
    <head>
        <?php require_once 'Parts/stylesheets.html'; ?>
    </head>
    <body>
        <?php require 'Parts/nav.php' ?>
        <div class="container">
            <h1>Identifiez-vous pour ajouter de nouvelle planète et de nouveau vaisseaux</h1>
            <form method="POST" action="../starWarsMVC/index.php?controller=login&action=connectDone">
                <label>Nom de Login </label>
                <input class="form-control" name="login" type="text" placeholder="login">
                <label> Mot de passe </label>
                <input class="form-control" name="password" type="password" placeholder="password"> <br>
                <input type="submit" class="btn btn-success">
              
            </form>
        </div>
        <?php require 'Parts/script.html'; ?>
    </body>
</html>