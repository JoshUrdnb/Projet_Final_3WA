<?php 

include 'request.php';

if(isset($_POST['register-submit'])) {
    // var_dump($_POST);
    // echo "Connexion validé !";

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    var_dump($userEmail);
    die();

    $request = $db->prepare('INSERT INTO members VALUES (0, :name, :email, :password)');
    $request->execute(
        array(
            "name" => $userName,
            "email" => $userEmail,
            "password" => $userPassword
        )
    );

    $responce = $request->fetchAll(PDO::FETCH_ASSOC);
    var_dump($responce);

} else {

    echo 'Problème lors de la validation';

}

?>