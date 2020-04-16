<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body>
        <?php require 'Parts/nav.php'; ?>
        <div class="container">
            <h1 class="text-primary">Bienvenue sur la page premettant d'ajouter une nouvelle planete</h1>
            <form method="POST" action="../starWarsMVC/index.php?controller=planet&action=addPlanetDone" enctype="multipart/form-data">
                <label> Name </label>
                <input name="name" type="text" require class="form-control">
                <label> Status </label>
                <input name="status" type="text" require class="form-control">
                <label> Terrain </label>
                <input name="terrain" type="text" require class="form-control">
                <label> Allegiance </label>
                <select name="allegiance" class="form-control" placeholder="Allegiance">
                    <?php 
                        foreach($allegiances as $allegiance) {
                            echo('<option value="'.$allegiance.'">'.$allegiance.'</option>');
                        }
                    ?>
                </select>
                <label> key_fact </label>
                <input name="key_fact" type="text" require class="form-control">
                <label> Image </label>
                <input name="image" type="file" class="form-control">
                <input type="submit" value="Valider" class="btn btn-success">
            </form>
        </div>
        <?php require 'Parts/script.html'; ?>
    </body>
</html>