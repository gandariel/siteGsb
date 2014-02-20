<?php
 $pseudo = "test";
 $pass = "test";
        // Si on a soumit le formulaire (si on a cliqué sur "Se connecter")
        if(isset($_POST['go_login'])) 
		{
            
                    // On vérifie la concordance des mots de passe (en md5)
                    if($_POST['pseudo']==$pseudo && $_POST['mdp'] == $pass) 
					{
 
                        // Si on arrive jusque ici c'est que le couple login / mot de passe est résolu
                        // On lance donc la session
 
                        session_start();
                        echo 'Vous etes connecté !';
 
                    } 
					else 
					{
                        echo 'Mauvais mot de passe pour cet utilisateur.';
                    }
		}
?>