<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if (isset($_SESSION['id'])) {
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();

    if (isset($_POST['newpseudo']) and !empty($_POST['newpseudo']) and $_POST['newpseudo'] != $user['pseudo']) {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);
    }
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
            <h2>Edit my profil</h2>
            <form method="POST" action="">
                <label>Pseudo :</label>
                <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>"><br><br>
                <label>Mail :</label>
                <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>"><br><br>
                <label>Password :</label>
                <input type="password" name="newpsw1" placeholder="Password"><br><br>
                <label>Password Confirmation :</label>
                <input type="password" name="newpsw2" placeholder="Password Confirmation"><br><br>
                <input type="submit" value="Update my profil !">
            </form>

        </div>
    </body>

    </html>
<?php
} else {
    header("Location: loginForm.php");
}
?>