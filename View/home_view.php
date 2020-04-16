<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body>
        <?php require 'Parts/nav.php'; ?>
        <h1 class="text-center text-primary">Bienvenue sur la page listant les planets et les vaisseaux </h1>
       
        <h2 class="text-danger text-center">Les planètes </h2>
        <table class="table table-dark">
            <thead>
                <td scope="col"> Id</td>
                <td scope="col"> Name</td>
                <td scope="col"> Status</td>
                <td scope="col"> Terrain</td>
                <td scope="col"> Allegiance</td>
                <td scope="col"> Key_fact</td>
                <td scope="col"> Image</td>
                <td scope="col">Action </td>
            </thead>
            <tbody>
                <?php
                    foreach($planets as $planet){
                ?>    
                <tr>
                    <td><?php echo($planet->getId()); ?></td>
                    <td><?php echo($planet->getName()); ?></td>
                    <td><?php echo($planet->getStatus()); ?></td>
                    <td><?php echo($planet->getTerrain()); ?></td>
                    <td><?php echo($planet->getAllegiance()); ?></td>
                    <td><?php echo($planet->getKey_fact()); ?></td>
                    <td><img src="images/planets/<?php echo($planet->getImage()); ?>" style="max-width:200px;"></td>
                    <td>
                        <a class="btn btn-primary" href="../starWarsMVC/index.php?controller=planet&action=detail&id=<?php echo $planet->getId()?>">Voir le détail</a><br>
                        <a class="btn btn-danger" href="../starWarsMVC/index.php?controller=planet&action=delete&id=<?php echo $planet->getId()?>">Supprimer </a><br>
                        <a class="btn btn-success" href="../starWarsMVC/index.php?controller=planet&action=update&id=<?php echo $planet->getId()?>">Modifier </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <h2 class="text-danger text-center">Les vaisseau </h2>

        <table class="table table-dark">
            <thead>
                <td scope="col"> Id</td>
                <td scope="col"> Name</td>
                <td scope="col"> Armement</td>
                <td scope="col"> Allegiance</td>
                <td scope="col"> Key_fact</td>
                <td scope="col"> Image</td>
                <td scope="col">Action </td>
            </thead>
            <tbody>
                <?php
                    foreach($vaisseaux as $vaisseau){
                ?>    
                <tr>
                    <td><?php echo($vaisseau->getId()); ?></td>
                    <td><?php echo($vaisseau->getName()); ?></td>
                    <td><?php echo($vaisseau->getArmement()); ?></td>
                    <td><?php echo($vaisseau->getAllegiance()); ?></td>
                    <td><?php echo($vaisseau->getKey_fact()); ?></td>
                    <td><img src="images/vaisseaux/<?php echo($vaisseau->getImage()); ?>" style="max-width:200px;"></td>
                    <td>
                        <a class="btn btn-primary" href="../starWarsMVC/index.php?controller=vaisseau&action=detail&id=<?php echo $vaisseau->getId()?>">Voir le détail</a><br>
                        <a class="btn btn-danger" href="../starWarsMVC/index.php?controller=vaisseau&action=delete&id=<?php echo $vaisseau->getId()?>">Supprimer </a><br>
                        <a class="btn btn-success" href="../starWarsMVC/index.php?controller=vaisseau&action=update&id=<?php echo $vaisseau->getId()?>">Modifier </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <?php require 'Parts/script.html'; ?>
    </body>
</html>