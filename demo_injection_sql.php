<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=demo_injection_sql','root','root');
    $db->exec('SET NAMES "UTF8"');
}catch(PDOException $exc){
    echo $exc->getMessage();
}


// if(!empty($_GET['id'])){
//     $id = $_GET['id'];
//     $sql = "SELECT * FROM `users` WHERE `id` = $id;";
//     // var_dump($sql);
//     $query = $db->query($sql);
//     $users = $query->fetchAll(PDO::FETCH_ASSOC);
// }

// ------ Sécuriser la variable $_GET -------

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM `users` WHERE `id` = :id;";
    // var_dump($sql);
    $query = $db->prepare($sql);
    // injection_sql de l'id
    $query->bindValue('id', $id, PDO::PARAM_INT);
    // Exécution
    $query->execute();

    $users = $query->fetchAll(PDO::FETCH_ASSOC);
}



foreach ($users as $user){
    echo'<p>'.$user['email'].'</p>';
}

// pour tester une injection_sql voici un exemple d'un lien: 
// après ?id=2.. faut ajouter ';CREATE DATABASE demo_Test'

// 'OR 1=1' pour afficher les donnees de la table : 
// http://localhost/securite_php/demo_injection_sql.php?id=2 OR 1=1

// exemple pour creer une base : http://localhost/securite_php/demo_injection_sql.php?id=2;CREATE DATABASE demo_Test

// 2eme exemple pour creer une table : http://localhost/securite_php/demo_injection_sql.php?id=2;CREATE%20TABLE%20`demo_Test`.`test4`%20(%20`test`%20INT%20NOT%20NULL%20)%20ENGINE%20=%20InnoDB;

// 3eme exemple pour supprimer la base : http://localhost/securite_php/demo_injection_sql.php?id=2;DROP%20DATABASE%20demo_Test

?>