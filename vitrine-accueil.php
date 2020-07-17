<!DOCTYPE html>
<html lang="fr">
<head>
    <title>MY DEV BLOG</title>
    <link rel="stylesheet" href="vitrinephp.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
$page_title="Accueil"; 
     Include ("header.php")
     ?>

<main class="Accueil">



<h2>Mes drôles de potes </h2>
                <p>HTML - CSS - PHP - SQL , ces abréviation ne veulent rien dire pour le commun des mortels mais moi j'ai le numérique dans les veines et débordant d'imagination je vais vous présenter mes petites astuces afin de crée votre site web le plus facilement possible alors rendre vous dans l'onglet "Articles" pour que tu puisse découvrir le monde de l'informatique 
                </p>

            <aside>
                <h1>À propos de moi</h1>
                <img src="homer-simpson-any-key.jpg">
                <p>Laisse-moi le temps de me présenter: je m'appelle Benoît j'ai 21 ans et depuis 1 mois je passe mon temps a coder c'est long car il fait chaud et beau dehors et je reve juste de partir sur la plage parfaire mon bronzage de paysan !</p>
                </aside>
            
    <h2>Les derniers articles</h2>

    <?php
function connect_to_database() {
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'mydevblog';
 
try {
$pdo = new PDO("mysql:host=$servername; dbname=$databasename" , $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'Connexion reussie a la base de donnee';
return $pdo;
} catch (PDOException $e){
echo "connection failed: " . $e-> getMessage();
}
}
$pdo=connect_to_database();
 
$users = $pdo->query("INSERT INTO `article` (`ID`, `Date`, `Contenu`, `Auteur`) VALUES ('". $_POST['title'] ."',''". $_POST['date'] ."','". $_POST['contenu'] ."','". $_POST['auteur'] ."');");

?>

 

</main>            

<?php
     Include ("footer.php") 
     ?> 


</body>
</html>