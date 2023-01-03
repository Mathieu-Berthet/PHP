<?php
    $civilite = "";
    $name = "";
    $firstName = "";
    $email = "";
    $raisonContact = "";
    $message = "";


    if(filter_input($_POST['nom']) == "")
    {
        echo "test";
    }
?>

<form action="" method="post">
    <p>Veuillez saisir vos informations ainsi que votre message afin de nous contacter : </p>
    <label>Votre Civilité : </label>
    <select>
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select><br><br>

    <label>Votre Nom : </label>&nbsp;<input type="text" name="nom" placeholder="Nom"><br><br>
    <label>Votre Prénom : </label>&nbsp;<input type="text" name="prenom" placeholder="Prénom"><br><br>
    <label>Votre E-mail : </label>&nbsp;<input type="email" name="mail" placeholder="Email@email.com"><br><br>
    <label>Veuillez indiquer la raison pour laquelle vous nous contacter : </label><br><br>
    <input type="radio" name="raisonContact">&nbsp;<label>Proposition d'emploi</label><br>
    <input type="radio" name="raisonContact">&nbsp;<label>Demande d'information</label><br>
    <input type="radio" name="raisonContact">&nbsp;<label>Prestation</label><br><br>

    <label>Votre message : </label><br><textarea placeholder="Votre message" style="resize:none"></textarea><br><br>

    <input type="submit" value="Envoyer">

</form>
