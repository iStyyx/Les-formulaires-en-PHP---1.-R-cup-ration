<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaire en php - 1</title>
</head>
<body>
    
    <form  action="thanks.php"  method="post">
        <h1>Formulaire d'adoption d'un animal</h1>
        <div>
            <label for="surname">Nom :</label>
            <input type="text"  id="surname"  name="user_surname">
        </div>
        <div>
            <label for="name">Prénom :</label>
            <input type="text"  id="name"  name="user_name">
        </div>
        <div>
            <label for="courriel">Adresse e-mail :</label>
            <input type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label for="phone">Numéro de téléphone :</label>
            <input type="tel"  id="phone"  name="user_phone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
        </div>
        <div>
            <label for="subject">La demande concerne un :</label>
            <select name="user_subject" id="subject">
                <option value="Chien">Chien</option>
                <option value="Chat">Chat</option>
                <option value="Lapin">Lapin</option>
                <option value="Poulet">Poulet</option>
            </select>
        </div>
            <label for="message">Message :</label>
            <textarea id="message"  name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>

    <?php
        var_dump($_POST);
    ?>

</body>
</html>
