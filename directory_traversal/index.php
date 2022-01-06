<?php
// Block access from all other files
$page = $_GET['page'] ?? 'home';

// Pour eviter 'Directory traversal' ou le 'Path Injection' faut créer les routes vers les pages du site $route = ['home','about' ..]
// exemple d'un chamin d'un fichier confidentiel ": "http://localhost../.../directory_traversal/hightly_confidential/secret.php"
// afin d'éviter à un utilisateur de naviguer sur des pages auxquelles il n'est pas censé avoir accès

$route = ['home', 'blog', 'about', 'forum'];
$page = in_array($page, $route) ? $page : 'home';

// avec cette methode le chemin confidentiel "../hightly_confidential/secret.php" et d'autres sont rediriger vers la page d'accueil 'home.php'

echo file_get_contents($page.'.php');

?>