<?php
?>

<form action="" method="GET">
    <p>Veuillez saisir vos informations ainsi que votre message afin de nous contacter : </p>
    <label>Civilité : </label>
    <select>
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select><br>

    <label>Votre nom : </label><input type="text" name="nom" placeholder="nom"><br><br>
    <label>Votre Prénom : </label><input type="text" name="prenom" placeholder="prénom"><br><br>
    <label>Votre email : </label><input type="email" name="mail" placeholder="email"><br><br>
    <label>Veuillez indiquer la raison pour laquelle vous nous contacter : </label><br><br>
    <input type="radio" name="raisonContact"><label>Proposition d'emploi</label><br>
    <input type="radio" name="raisonContact"><label>Demande d'information</label><br>
    <input type="radio" name="raisonContact"><label>Prestation</label><br><br>

    <label>Votre message : </label><br><textarea placeholder="Votre message"></textarea><br><br>

    <input type="submit" value="Envoyer">

</form>
