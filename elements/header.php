<link rel="stylesheet" href="style/header.css">




    <ul class="header-ul">

        <li class="header-li"><a href="index.php">Accueil</a></li>
        

                    <?php if(!isset($_SESSION['id'])) {?>

                        
                        <li class="header-li"><a href="connexion.php">Connexion</a></li>
                        <li class="header-li"><a href="inscription.php">Inscription</a></li>
                    
                    
                    

                    <?php } 

                    
                    

                    else{?>
                        <li class="header-li"><a href="planning.php">Calendrier</a></li>
                        <li class="header-li"><a href="profil.php">Modifier Mon profil</a></li>
                        <li class="header-li" style="float:right"><a class="active" href="deconnexion.php">Deconnexion</a></li>
                        
                    <?php }?>
                

                    
    </ul class="header-ul">
