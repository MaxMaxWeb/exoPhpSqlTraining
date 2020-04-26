<?php

$error = NULL;
$error = $_GET['error'];

// appel à la bdd pour afficher les données voulues avec une gestion d'erreur;

if ( empty($_POST) || !ctype_digit($_POST['zip']) || strlen($_POST['zip']) != 5 || $_POST['price'] < 1){

    header("http://localhost:9090/addannonces?error=CP");



    }
else
{

    $title = $_POST['title'];
    $description = $_POST['description'];
    if (($_FILES)['photo']['name'] == ""){
        $photo = "https://picsum.photos/200/300";
    } else {
        $uploaddir = "./assets/image/";
        $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
        $uploadfile = $uploaddir . "annonce" . date('m-d-Y_H:i:s')."jpeg";
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
            $photo = $uploadfile;
        }
    }
    $price = $_POST['price'];
    $zip = $_POST['zip'];
    $city = $_POST['city'];
    $author = $_POST['author'];
    $stm = $pdo->prepare('INSERT INTO annonces (title, description, photo, price, zip, city, author ) VALUES (:title, :description, :photo, :price, :zip, :city, :author)');
    $stm->bindParam(':title', $title);
    $stm->bindParam(':description', $description);
    $stm->bindParam(':photo', $photo);
    $stm->bindParam('price', $price);
    $stm->bindParam(':zip', $zip);
    $stm->bindParam(':city', $city);
    $stm->bindParam(':author', $author);

    $stm->execute();

    header("http://localhost:9090/addannonces");







}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title id='title'>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<p> <?= $error ?> </p>
<div class="container">
    <h2 clas="text-center"> Ajoutez une annonce ! </h2>
    <form method="post" enctype="multipart/form-data">

        <input type="text" name="title" placeholder="titre de l'annonce">
        <textarea type="text" name="description" placeholder="description"></textarea>
        <input type="file" name="photo">
        <input type="number" name="price" placeholder="prix">
        <input type="text" name="zip" placeholder="code postal">
        <input type="text" name="city" placeholder="ville">
        <input type="text" name="author" placeholder="pseudo">
        <input type="submit" value="ajouter">

    </form>
    <a href="http://localhost:9090/les_annonces"> Voir les annonces </a>

</div>


