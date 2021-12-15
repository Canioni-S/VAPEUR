<?php

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if (isset($_POST['forminscription'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $psw = sha1($_POST['psw']);
    $psw2 = sha1($_POST['psw2']);

    if (!empty($_POST['pseudo']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['psw']) and !empty($_POST['psw2'])) {
        $pseudolength = strlen($pseudo);
        if ($pseudolength <= 255) {
            $reqpseudo = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?");
            $reqpseudo->execute(array($pseudo));
            $pseudoexist = $reqpseudo->rowCount();
            if ($pseudoexist == 0) {
                if ($mail == $mail2) {
                    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                        $reqmail->execute(array($mail));
                        $mailexist = $reqmail->rowCount();
                        if ($mailexist == 0) {
                            if ($psw == $psw2) {
                                $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                                $insertmbr->execute(array($pseudo, $mail, $psw));
                                $erreur = "Inscription Completed ! <a href=\"loginForm.php\">Connect</a>";
                            } else {
                                $erreur = "Password verification failed !";
                            }
                        } else {
                            $erreur = "Email already exist !";
                        }
                    } else {
                        $erreur = "Invalid email !";
                    }
                } else {
                    $erreur = "Email verification failed !";
                }
            } else {
                $erreur = "Pseudo already exist";
            }
        } else {
            $erreur = "Pseudo must be less then 255 entry";
        }
    } else {
        $erreur = "All field must be completed";
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
    <title>SIGNUP</title>
</head>

<body>
    <div id="id02" class="modal">

        <form class="modal-content" method="POST" action="">
            <div class="imgcontainer">
                <a href="./form.php"><span style="font-size: 2em; font-weight: bold;">&times;</span></a>
            </div>
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="pseudo"><b>Pseudo</b></label>
                <input class="inputForm" type="text" placeholder="Choose Pseudo" name="pseudo" value="<?php if (isset($pseudo)) {
                                                                                                            echo $pseudo;
                                                                                                        } ?>">

                <label for="mail"><b>Email</b></label>
                <input class="inputForm" type="email" placeholder="Enter Email" name="mail" value="<?php if (isset($mail)) {
                                                                                                        echo $mail;
                                                                                                    } ?>">>

                <label for="mail2"><b>Repeat Email</b></label>
                <input class="inputForm" type="email" placeholder="Repeat Email" name="mail2" value="<?php if (isset($mail2)) {
                                                                                                        echo $mail2;
                                                                                                    } ?>">>

                <label for="psw"><b>Password</b></label>
                <input class="inputForm" type="password" placeholder="Enter Password" name="psw">

                <label for="psw2"><b>Repeat Password</b></label>
                <input class="inputForm" type="password" placeholder="Repeat Password" name="psw2">

                <?php
                if (isset($erreur)) {
                    echo '<font color="red">' . $erreur . '</font>';
                } else {
                }
                ?>

                <button type="submit" name="forminscription" class="signupbtn">Sign Up</button>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
                </p>

                <div class="clearfix">
                    <a href="./form.php"><button type="button" class="cancelbtn">Cancel</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>