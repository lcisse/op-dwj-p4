                                    <!-- NAV -->
<nav class="col navbar navbar-expand-md navbar-light fixed-top">
    <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="nav">
        <div class="navbar-nav">
            <div class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="index.php?action=accueil"><i class="fas fa-home"></i> Accueil</a>
            </div>
            <div class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="index.php?action=about">A propos</a>
            </div>
            <div class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="index.php?action=listBillets">Articles</a>
            </div>
            <div class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="index.php?action=pageContact">Contact</a>
            </div>
            <a  class="nav-link btn btn-default font-weight-bold text-uppercase px-3" href="<?php echo $_SESSION["deconnection"]; ?>.php?action=connexion" style="background-color: white;"><?php echo $_SESSION["deconnecter"]; ?></a>
            <a class="nav-link text-light btn btn-default font-weight-bold text-uppercase px-3" href="index.php?action=inscription"><?php echo $_SESSION["inscription"]; ?></a>
            <div class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="index.php?action=admin"><?php echo $_SESSION['admin']; ?></a>
            </div>
        </div>
    </div>    
</nav>
            <!-- END OF NAV -->