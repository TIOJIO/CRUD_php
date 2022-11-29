<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT APP</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="wrapper">
        <section class="signup form">
            <header>INSCRIPTION ETUDIANTS</header>
            <form action="insert.php" method="POST">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">Nom</label>
                        <input type="text" name="fname" placeholder="Votre nom" required>
                    </div>
                    <div class="field input">
                        <label for="">Prenom</label>
                        <input type="text" name="lname" placeholder="Votre prenom" required>
                    </div>
                </div>

                <div class="field input">
                    <label for="">Date de naissance</label>
                    <input type="date" name="date" placeholder="Votre date de naissance" required>
                </div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="mail" name="email" placeholder="Votre Email" required>
                    </div>
                    <div class="field input">
                        <label for="">Numéro</label>
                        <input type="text" name="numero" placeholder="Votre numero" required>
                    </div>
                </div>
                <div class="field input">

                    <label for="">Mot de Passe</label>
                    <input type="password" name="password1" placeholder="Votre mdp" required>

                </div>
                <div class="field input">

                    <label for="">Confirme mot de Passe</label>
                    <input type="password" name="password2" placeholder="Votre mdp" required>

                </div>

                <div class=" field button">
                    <input type="submit" name="envoyer" value="Envoyer">
                </div>
            </form>

        </section>

    </div>


</body>

</html>