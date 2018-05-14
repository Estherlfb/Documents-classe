<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/exo.css">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="cible.php">
        <label> Votre URL : </label> 
        <input type="URL" name="Site_web" placeholder="URL" value="http://" required> <br />
        <label> Vos identifiant : </label> 
        <input type="text" name="Identifiant" placeholder="Login" required> <br />
        <label for="mdp"> Votre Mot de passe : </label> 
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required> <br />
        <label for="confirm_mdp"> Confirmer le mot de passe : </label> 
        <input type="password" name="confirm_mdp" id="confirm_mdp" placeholder="Confirmer mot de passe" required> <br />
        <label> Choisissez un CMS : </label> 
        <select name="CMS" id="CMS" placeholder="CMS" required>
           <option value="Joomla!">Joomla!</option>
           <option value="Wordpresse">Wordpresse</option>
           <option value="Drupal">Drupal</option>
           <option value="Prestashop">Prestashop</option>
           <option value="Magento">Magento</option>
           <option value="Html/Css">Html/Css</option>
           <option value="Autres">Autres</option>
        </select>  <br /> 
        <label> Mettez un statut : </label> 
        <select name="Statut" id="Statut" required>
            <option value="Developpement"> Developpement </option>
            <option value="Production"> Production </option>
            <option value="Désactivé"> Désactivé </option>
        </select>  <br />   
        <label for="description">Souhaitez-vous mettre une description ?</label>
        <textarea name="descritpion" id="Description"></textarea> <br />
        <button type="submit"> Envoyer </button>
    </form>

</body>
</html>


