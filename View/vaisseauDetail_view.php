<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body style="background-image: url(https://media.discordapp.net/attachments/676776925947101191/687289557649063994/stars-wallpaper-3.jpg?width=832&height=469)">
        <?php require 'Parts/nav.php'; ?>
    
        <div class="row mt-5 ">
            <div class="col-6 ">
                 <img class="d-block m-auto" style="width: 400px"  src="images/vaisseaux/<?php echo($vaisseau->getImage()); ?>" alt="<?php echo($vaisseau->getName()); ?>">
            </div>
            <div class="col ml-5  text-light">
                <h2 class="mb-5 "> Voici le vaisseau  <span class="text-danger"><?php echo($vaisseau->getName()); ?> </span></h2>
                <h3 class="mb-5">Il est équipé de l'armement suivant : <br> <span class="text-danger"><?php echo($vaisseau->getArmement()); ?> </span></h3>
                <h3 class="mb-5">Elle appartient à l'allegiance: <br> <span class="text-danger"><?php echo($vaisseau->getAllegiance()); ?> </span></h3>
                <h3 class="mb-5">Quelque Key Fact intéressant : <br> <span class="text-danger"><?php echo($vaisseau->getKey_fact()); ?> </span></h3>
            </div>
        </div>
    <?php require 'Parts/script.html'; ?>
    </body>
</html>