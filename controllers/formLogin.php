<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>
        <nav>
            <a href="../index.php">Go to Homepage</a>
        </nav>
    </header>

    <?php 

        include 'request.php';

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $userEmail = $_POST['email'];
                $userPassword = $_POST['password'];
                // echo $userEmail. ' _ ' .$userPassword;
                if($userEmail != "" && $userPassword !="") {
                    // Connexion a la DB
                    $request = $db->query("SELECT * FROM members WHERE email = '$userEmail' AND password = '$userPassword' ");
                    $response = $request->fetch();
                    if($response['id'] != false) { //erreur lorsque login n'existe pas, pourquoi ??????
                        // c'est ok
                        echo "You're logged in !";
                        header('Location: ../homepage.php');
                    } else {
                        echo "Email or password incorrect !";
                    }
                }
            }
    ?>

    <form id="formLogin" method="POST" action="">
        <h2>Login :</h2>

        <div>
            <input id="email" type="text" placeholder="Enter your email" name="email" required>
            <div id="emailError" class="error-message"></div>
        </div>

        <div>
            <input id="password" type="password" placeholder="Enter your password" name="password" required>
            <div id="passwordError" class="error-message"></div>
        </div>

        <input type="submit" name="login-submit" value="Let me in!" />
    </form>

</body>

</html>