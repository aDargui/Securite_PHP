<?php

// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

// var_dump($_SERVER['HTTP_ORIGIN']);

// -- Pour filtrer les robots comme Postman ou autre --

//Faut d'abord vérifier que le formulaire remplis par le visiteur vient de mon site 'http://localhost' avec $_SERVER['HTTP_ORIGIN']

if(isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] == 'http://localhost'){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // faut ajouter un input type hidden vide et verifier que le champ "Pot de miel" est vide ;)
        if(isset($_POST['raison']) && empty($_POST['raison'])){
            //Vérifie si tous les champs sont presents et remplis
            if(isset($_POST['nom']) && !empty($_POST['nom']) &&
            isset($_POST['sujet']) && !empty($_POST['sujet']) &&
            isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['message']) && !empty($_POST['message'])){
                
                // Nettoyer le contenu
                $nom = strip_tags($_POST['nom']);
                $sujet = strip_tags($_POST['nom']);
                $email = strip_tags($_POST['nom']);
                $message = htmlspecialchars($_POST['nom']);
                //pour traiter les données
                echo "Message de {$nom} envoyé";
            }
    
        }
        
    }else{
        http_response_code(405);
        echo 'Méthode non autorisée';
    }
}
        http_response_code(405);
        echo 'Erreur 404';


?>