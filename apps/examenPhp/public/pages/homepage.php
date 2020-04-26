<?php

// appel à la bdd pour afficher les données voulues


if (!empty($_GET['cp'])){
    $cp = $_GET['cp'];
    $stm = $pdo->query("SELECT * FROM annonces WHERE zip = '$cp'");

    $annonces = $stm->fetchAll();

}
else {

$stm = $pdo->query("SELECT * FROM annonces");

$annonces = $stm->fetchAll();
}


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

<a href="http://localhost:9090/addannonces"><h3> Ajoutez une annonce </h3>  </a>

<form method="GET">
    <input type="text" name="cp" placeholder="recherche par code postal">
   <a href="http://localhost:9090"><input type="submit" value="rechercher"> </a>
</form>
<a href="http://localhost:9090/"> <button type="button" class="btn btn-primary"> Reinitialiser </button> </a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">titre</th>

        <th scope="col">prix</th>

        <th scope="col">ville</th>

        <th scope="col"> en savoir plus </th>

    </tr>
    </thead>
    <tbody>
    <?php foreach($annonces as $annonce){ ?>
    <tr>
        <td> <?= $annonce['title'] ?>  </td>

        <td> <?= $annonce['price']."€" ?></td>

        <td> <?= $annonce['city'] ?></td>

        <td> <a href="http://localhost:9090/annonce?id=<?= $annonce['id'] ?>"> Voir l'annonce </a> </td>

    </tr>



    </tr>

    <?php } ?>


    </tbody>

</table>
