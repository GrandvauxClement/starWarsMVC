<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../starWarsMVC/index.php?controller=default&action=home"><img src="images/Star_Wars_Logo.svg.png" style="max-width: 150px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link " href="../starWarsMVC/index.php?controller=planet&action=addPlanet">Ajouter une nouvelle planète </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../starWarsMVC/index.php?controller=vaisseau&action=addVaisseau">Ajouter un nouveau vaisseau </a>
        </li>
        <li class="nav-item">
          <?php if(!isset($_SESSION['utilisateur'])){
              echo('<a class="nav-link" href="../starWarsMVC/index.php?controller=login&action=connect">Se connecter</a>');
          }
          else{
            echo('<a class="nav-link" href="../starWarsMVC/index.php?controller=login&action=disconnect">Se Deconnecter</a>');
          }
          ?>
          
        </li>
      </ul>
    </div>
  </nav>