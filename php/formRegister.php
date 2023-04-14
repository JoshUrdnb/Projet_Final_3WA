<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
</head>
<body>

    <header>
        <nav>
            <a href="../index.php">Go to Homepage</a>
        </nav>
    </header>

    <form id="formRegister" method="POST" action="traitement.php">
        <h2>Register :</h2>

        <div>
            <input id="name" type="text" placeholder="Enter an username" name="name">
            <div id="nameError" class="error-message"></div>
        </div>

        <div>
            <input id="email" type="text" placeholder="Enter your email" name="email">
            <div id="emailError" class="error-message"></div>
        </div>

        <div>
            <input id="password" type="password" placeholder="Enter your password" name="password">
            <div id="passwordError" class="error-message"></div>
        </div>

        <!-- <button type="submit" name="register-submit">Send</button> -->
        <input type="submit" name="register-submit" value="Send" />
    </form>

    <script src="../js/formRegister.js"></script>
</body>
</html>