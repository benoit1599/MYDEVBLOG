<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Tous nos articles</title>
    <link rel="stylesheet" href="vitrinephp.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
<?php
$page_title="Articles"; 
     Include ("header.php")
     ?>
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