<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if (isset($_GET['id']) and $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>PROFIL</title>
    </head>

    <body>
        <div>
            <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
            <br>
            Pseudo = <?php echo $userinfo['pseudo']; ?>
            <br>
            Mail = <?php echo $userinfo['mail']; ?>
            <br>
            <?php
            if (isset($_SESSION['id']) and $userinfo['id'] == $_SESSION['id']) {
            ?>
                <a href="./profiledit.php">Edit profile</a>
                <a href="./deconnection.php">Deconnect</a>
            <?php
            }
            ?>
        </div>
    </body>

    </html>
<?php
}
?>