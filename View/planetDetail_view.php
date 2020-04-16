<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body style="background-image: url(https://media.discordapp.net/attachments/676776925947101191/687289557649063994/stars-wallpaper-3.jpg?width=832&height=469)">
        <?php require 'Parts/nav.php'; ?>
    
        <div class="d-flex justify-content-around  mt-5 ">
        <img class="" src="images/planets/<?php echo($planet->getImage()); ?>" alt="<?php echo($planet->getName()); ?>">
        <div class="ml-5  text-light">
            <h2 class="mb-5 "> Voici la planète <span class="text-danger"><?php echo($planet->getName()); ?> </span></h2>
            <h3 class="mb-5">Son status  est : <br> <span class="text-danger"><?php echo($planet->getStatus()); ?> </span></h3>
            <h3 class="mb-5">Son terrain  est : <br> <span class="text-danger"><?php echo($planet->getTerrain()); ?> </span></h3>
            <h3 class="mb-5">Elle appartient à l'allegiance: <br> <span class="text-danger"><?php echo($planet->getAllegiance()); ?> </span></h3>
            <h3 class="mb-5">Quelque Key Fact intéressant : <br> <span class="text-danger"><?php echo($planet->getKey_fact()); ?> </span></h3>
        </div>
        </div>
    <?php require 'Parts/script.html'; ?>
    </body>
</html>