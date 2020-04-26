<?php

// appel à la bdd pour afficher les données voulues en recherchant l'id grace au parametre passé en GET;

$id = $_GET['id'];
$stm = $pdo->query("SELECT * from annonces WHERE id = '$id'");
$annonceById = $stm->fetchAll();


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title id='title'>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<a href="http://localhost:9090/"> <button type="button" class="btn btn-primary"> Home </button> </a>

<div class="container">
<?php foreach ($annonceById as $annonce){?>
    <div class="container d-flex flex-column ">

        <img class=" w-50 h-50" src="<?= $annonce['photo']?>">


        <h3 class=" row text-center my-5"> <?= $annonce['title'] ?> </h3>

        <div class="d-flex justify-content-around">
            <p> prix : <?= $annonce['price']."€" ?> </p>
            <p> vendu par : <?=$annonce['author'] ?> </p>

        </div>
        <div>
            <p class="text-center"> <?=$annonce['description'] ?> </p>
        </div>
    </div>
<?php } ?>


</div>
