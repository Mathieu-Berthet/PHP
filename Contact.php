<?php
    $civilite = "";
    $name = "";
    $firstName = "";
    $email = "";
    $raisonContact = "";
    $message = "";

    $arrayInfo = [];
    $date = date("Y-m-d-H-i-s");

    $fileName = "contact/contact_".$date.".txt";

    $arrayInfo = [$civilite = filter_input(INPUT_POST, 'civilite')."\n",
    $name = filter_input(INPUT_POST, 'nom')."\n",
    $firstName = filter_input(INPUT_POST, 'prenom')."\n",
    $email = filter_input(INPUT_POST, 'mail')."\n",
    $raisonContact = filter_input(INPUT_POST, 'raisonContact')."\n",
    $message = filter_input(INPUT_POST, 'message')."\n"];

    file_put_contents($fileName, $arrayInfo);
?>

<form action="" method="post">
    <p>Veuillez saisir vos informations ainsi que votre message afin de nous contacter : </p>
    <label for="civilite">Votre Civilité : </label>
    <select id="civilite" name="civilite">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select><br><br>

    <label for="nom">Votre Nom : </label>&nbsp;<input type="text" name="nom" id="nom" placeholder="Nom"><br><br>

    <label for="prenom">Votre Prénom : </label>&nbsp;<input type="text" name="prenom" id="prenom" placeholder="Prénom"><br><br>

    <label for="mail">Votre E-mail : </label>&nbsp;<input type="email" name="mail" id="mail" placeholder="Email@email.com"><br><br>

    <label>Veuillez indiquer la raison pour laquelle vous nous contacter : </label><br><br>
    <input type="radio" name="raisonContact" value="emploi" id="emploi">&nbsp;<label for="emploi">Proposition d'emploi</label><br>
    <input type="radio" name="raisonContact" value="information" id="information">&nbsp;<label for="information">Demande d'information</label><br>
    <input type="radio" name="raisonContact" value="prestation" id="prestation">&nbsp;<label for="prestation">Prestation</label><br><br>

    <label for="message">Votre message : </label><br><textarea name="message" id="message" placeholder="Votre message" style="resize:none"></textarea><br><br>

    <input type="submit" value="Envoyer">

</form>
