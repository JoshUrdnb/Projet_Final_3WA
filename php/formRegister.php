<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formRegister" method="post" action="">
        <h2>Enregistrez-vous :</h2>

        <div>
            <label for="name">Username :</label>
            <input id="name" type="text" placeholder="username" name="name">
            <div id="nameError" class="error-message"></div>
        </div>

        <div>
            <label for="name">Email :</label>
            <input id="email" type="email" placeholder="email" name="email">
            <div id="emailError" class="error-message"></div>
        </div>

        <div>
            <label for="name">Mot de passe :</label>
            <input id="password" type="text" placeholder="password" name="password">
            <div id="passwordError" class="error-message"></div>
        </div>

        <button type="submit" name="register-submit">Envoyer</button>
    </form>
    <script src="../js/formRegister.js"></script>
</body>
</html>