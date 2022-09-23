<?php
    namespace Tutoriel;
    require "class/Autoloader.php";
    Autoloader::register();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $form = new Form([
            "username"=>"Jordan",
            "password"=>"test"
        ]);

        echo $form->input('username');
        echo $form->input('password','password');
        echo $form->input('email','email','Adresse e-mail');

        echo $form->submit();
    ?>


</body>
</html>