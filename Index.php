<?php

include("header.php");

if(isset($_GET['page']))
{
    if ($_GET['page'] == "MaPage2")
    {
        include("MaPage2.php");
    }
    else if ($_GET['page'] == "MaPage3")
    {
        include("MaPage3.php");
    }
    else if ($_GET['page'] == "Contact")
    {
        include("Contact.php");
    }
}
else
{
    include("MaPage.php");
}

include "footer.php";


?>