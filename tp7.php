<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
    
<?php


    $us = $_POST['user'];
    $pass = $_POST['passwd'];


    if($us == 'admin' && $pass == 'admin')
    {
        echo 'Bienvenue '.$us.' vous êtes connecté';
    }
    else
    {
        echo 'Mot de passe Erronée, '.'<a href="javascript:history.back()">Réessayer</a>';
    } 













?>
</body>

</html>
