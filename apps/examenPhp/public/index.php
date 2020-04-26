<?php


$request = $_SERVER['REQUEST_URI'];
$uri = parse_url($request, PHP_URL_PATH);

//credentias pour la BDD
$dsn = "mysql:host=mysql;dbname=webforce-3";
$user = "root";
$passwd = "root";

//Je me connecte à ma BDD avec PDO
$pdo = new PDO($dsn, $user, $passwd);


// Creation d'un index pour naviguer dans la page;


switch ($uri) {
    case '/' :
        require __DIR__ . '/pages/homepage.php';
        break;
    case '/addannonces':
        require __DIR__ . '/pages/addAnnonces.php';
        break;
    case '/annonce':
        require __DIR__ . '/pages/annonce.php';
        break;
    default :
        require __DIR__ . '/pages/homepage.php';
        break;
}
