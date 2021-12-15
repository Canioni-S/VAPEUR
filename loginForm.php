<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if (isset($_POST['formconnect'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if (!empty($mailconnect) and !empty($mdpconnect)) {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexit = $requser->rowCount();
        if ($userexit == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: profil.php?id=".$_SESSION['id']);
        } else {
            $erreur = "This account doesn't exist";
        }
    } else {
        $erreur = 'All fields must be completed';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>

<body>

    <div id="id01" class="modal">

        <form class="modal-content" action="" method="POST">
            <div class="imgcontainer">
                <a href="./form.php"><span style="font-size: 2em; font-weight: bold;">&times;</span></a>
            </div>

            <div class="container">
                <h1>Login</h1>
                <p>Please fill in this form to login an existing account.</p>
                <hr>

                <label for="mailconnect"><b>Email</b></label>
                <input class="inputForm" type="email" placeholder="Enter Email" name="mailconnect">

                <label for="mdpconnect"><b>Password</b></label>
                <input class="inputForm" type="password" placeholder="Enter Password" name="mdpconnect">

                <?php
                if (isset($erreur)) {
                    echo '<font color="red">' . $erreur . '</font>';
                } else {
                }
                ?>

                <button type="submit" name="formconnect" class="signupbtn">Login</button>

                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <a href="./form.php"><button type="button" class="cancelbtn">Cancel</button></a>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
</body>

</html>