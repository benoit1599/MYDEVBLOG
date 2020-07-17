<!DOCTYPE html>
<html lang="fr">
<head>
    <title>my devblog Contact</title>
    <link rel="stylesheet" href="vitrinephp.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<body>
<?php
$page_title="Contacts"; 
     Include ("header.php")
     ?>
    <main class="Contact">
        <h2>CONTACT</h2>

    <form class="formulaire">
            <div class="Nom-et-Prénom">
                <input type="text" value="Votre nom" name="nom" id="nom" required>
            </div>

            <div class="Mail">
                <input type="text" value="Votre email" name="mail" id="mail" required>
            </div>

            <div class="Message">
                <input type="text" value="votre message" name="message" id="message" required>
            </div>
            <button class="envoyer"
                    type="button">
                Envoyer
            </button>
        </button>
    </form>

    </main>

<?php
     Include ("footer.php") 
    ?> 
   
</body>
</html>