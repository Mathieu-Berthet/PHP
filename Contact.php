<?php
    $civilite = "";
    $name = "";
    $firstName = "";
    $email = "";
    $raisonContact = "";
    $message = "";

    $isfill = true;

    $arrayInfo = [];
    $date = date("Y-m-d-H-i-s");

    $fileName = "contact/contact_".$date.".txt";

    if(isset($_POST['civilite']) || $_POST['civilite'] != "")
    {
        $civilite = filter_input(INPUT_POST, 'civilite') . "\n";
    }

    if(isset($_POST['nom']) || $_POST['nom'] != "")
    {
        $name = filter_input(INPUT_POST, 'nom') . "\n";
    }

    if(isset($_POST['prenom']) || $_POST['prenom'] != "")
    {
        $firstName = filter_input(INPUT_POST, 'prenom') . "\n";
    }

    if(isset($_POST['mail']) || $_POST['mail'] != "")
    {
        $email = filter_input(INPUT_POST, 'mail') . "\n";
    }

    if(isset($_POST['raisonContact']) || $_POST['raisonContact'] != "")
    {
        $raisonContact = filter_input(INPUT_POST, 'raisonContact') . "\n";
    }

    if(isset($_POST['message']) && (strlen($_POST['message']) >= 5))
    {
        $message = filter_input(INPUT_POST, 'message') . "\n";
        echo $message;
    }

    $arrayInfo = [$civilite, $name, $firstName, $email, $raisonContact, $message];

    if(!empty($_POST))
    {
        /*foreach($_POST as $key=>$value)
        {
            if(empty($value))
            {
                $isfill = false;
            }
        }*/


        for($i = 0; $i < count($arrayInfo); $i++)
        {
            if($arrayInfo[$i] == "")
            {
                $isfill = false;
            }
            else
            {
                $isfill = true;
            }
        }

        if($isfill)
        {
            file_put_contents($fileName, $_POST);
        }
    }
?>

<form action="" method="post">
    <p class="texte">Veuillez saisir vos informations ainsi que votre message afin de nous contacter : </p>
    <label for="civilite">Votre Civilité : </label>
    <select id="civilite" name="civilite">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select><br><br>

    <label for="nom">Votre Nom : </label>&nbsp;<input type="text" name="nom" id="nom" placeholder="Nom"><br><br>
    <p class="<?php echo (!empty($_POST) && empty($_POST["nom"])) ? 'visible' : ''?>">Le champ nom est vide</p>

    <label for="prenom">Votre Prénom : </label>&nbsp;<input type="text" name="prenom" id="prenom" placeholder="Prénom"><br><br>
    <p class="<?php echo (!empty($_POST) && empty($_POST["prenom"])) ? 'visible' : ''?>">Le champ prenom est vide</p>


    <label for="mail">Votre E-mail : </label>&nbsp;<input type="email" name="mail" id="mail" placeholder="Email@email.com"><br><br>
    <p class="<?php echo (!empty($_POST) && empty($_POST["mail"])) ? 'visible' :'' ?>">Le champ mail est vide</p>
    <p class="<?php if(!FILTER_VALIDATE_EMAIL) echo 'visible';?>">Ce champ est invalide. Ce n'est pas un email</p>

    <label>Veuillez indiquer la raison pour laquelle vous nous contacter : </label><br><br>
    <input type="radio" name="raisonContact" value="emploi" id="emploi">&nbsp;<label for="emploi">Proposition d'emploi</label><br>
    <input type="radio" name="raisonContact" value="information" id="information">&nbsp;<label for="information">Demande d'information</label><br>
    <input type="radio" name="raisonContact" value="prestation" id="prestation">&nbsp;<label for="prestation">Prestation</label><br><br>
    <p class="<?php echo (!empty($_POST) && empty($_POST["raisonContact"])) ? 'visible' : ''?>">Veuillez cocher une raison</p>



    <label for="message">Votre message : </label><br><textarea name="message" id="message" placeholder="Votre message" style="resize:none"></textarea><br><br>
    <p class="<?php echo (!empty($_POST) && (strlen($_POST["message"]) < 5)) ? 'visible' : '' ?>">Le message est trop court. Il doit faire au minimum 5 caractères</p>

    <input type="submit" value="Envoyer">

</form>
