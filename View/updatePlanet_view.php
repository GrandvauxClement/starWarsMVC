<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body>
    <?php require 'Parts/nav.php'; ?>
        <div  class="container">
            <h1 class="text-primary">Bienvenue sur la page premettant de modifier une planète</h1>
            <form method="POST" action="../starWarsMVC/index.php?controller=planet&action=updatePlanetDone&id=<?php echo($_GET['id']);?> " enctype="multipart/form-data">
                <label> Name </label>
                <input name="name" type="text" class="form-control" value="<?php echo($planet->getName()); ?>">
                <label> Status </label>
                <input name="status" type="text" class="form-control" value="<?php echo($planet->getStatus()); ?>">
                <label> Terrain </label>
                <input name="terrain" type="text" class="form-control" value="<?php echo($planet->getTerrain()); ?>">
                <label> Allegiance </label>
                <select name="allegiance" class="form-control" placeholder="Allegiance" value="<?php echo($planet->getAllegiance()); ?>">
                    <?php 
                        foreach($allegiances as $allegiance) {
                            if($allegiance === $planet->getAllegiance()){
                                echo('<option selected value="'.$allegiance.'">'.$allegiance.'</option>');
                            }
                            else {
                                echo('<option value="'.$allegiance.'">'.$allegiance.'</option>');
                            }
                        }
                    ?>
                </select>
                <label> key_fact </label>
                <input name="key_fact" type="text" class="form-control" value="<?php echo($planet->getKey_fact()); ?>">
                <label> Image </label>
                <img src="images/planets/<?php echo($planet->getImage()); ?>" style="max-width: 150px">
                <input name="image" type="file" class="form-control">
                <input type="submit" value="Valider" class="btn btn-success">
            </form>
        </div>
        <?php require 'Parts/script.html'; ?>
    </body>
</html>