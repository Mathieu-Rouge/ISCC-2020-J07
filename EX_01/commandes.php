<? php

//tableau//

$ historique_commandes = array ( 5.49 , 9.99 , 5.49 , 15.99 , 25 );

// listes reçues //

fonction  afficher_commandes ( $ historique_commandes )
{
    foreach ( $ historique_commandes  comme  $ element )
    echo  'Une commande de' . $ element . «euros a été reçu. <br>» ;

// calcul //
    array_sum ( $ historique_commandes );    
    echo  "Le total de commande est" . array_sum ( $ historique_commandes ). «euros» ;
}

afficher_commandes ( $ historique_commandes )

?>