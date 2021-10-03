<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
    <?php
    echo "Merci " . $_POST['user_surname'] . " " . $_POST['user_name'] . " de nous avoir contacté par rapport à l'adoption d'un " . $_POST['user_subject'] . "<br><br> Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_phone'] . "  dans les plus brefs délais pour traiter votre demande : <br>" . $_POST['user_message'];
?>


</body>
</html>
