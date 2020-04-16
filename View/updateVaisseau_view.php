<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body >
        <?php require 'Parts/nav.php'; ?>
        <div class="container">
            <h1 class="text-primary">Bienvenue sur la page premettant de modifier un vaisseau</h1>
            <form method="POST" action="../starWarsMVC/index.php?controller=vaisseau&action=updateVaisseauDone&id=<?php echo($_GET['id']);?> " enctype="multipart/form-data">
                <label> Name </label>
                <input name="name" type="text" class="form-control" value="<?php echo($vaisseau->getName()); ?>">

                <label> Armement </label>
                <input name="armement" type="text" class="form-control" value="<?php echo($vaisseau->getArmement()); ?>">

                <label> Allegiance </label>
                <select name="allegiance" class="form-control" placeholder="Allegiance">
                    <?php 
                        foreach($allegiances as $allegiance) {
                            
                            if($allegiance === $vaisseau->getAllegiance()){
                                echo('<option selected value="'.$allegiance.'">'.$allegiance.'</option>');
                            }
                            else {
                                echo('<option value="'.$allegiance.'">'.$allegiance.'</option>');
                            }
                            
                        }
                    ?>
                </select>

                <label> key_fact </label>
                <input name="key_fact" type="text" class="form-control" value="<?php echo($vaisseau->getKey_fact()); ?>">

                <label> Image </label>
                <img src="images/vaisseaux/<?php echo($vaisseau->getImage()); ?>" style="max-width: 150px">
                <input name="image" type="file" class="form-control">

                <input type="submit" value="Valider" class="btn btn-success">
            </form>
        </div>
        <?php require 'Parts/script.html'; ?>
    </body>
</html>