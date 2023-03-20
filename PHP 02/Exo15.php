<?php
function verifierEmail($email)
{

    if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = $email. " est un email valide <br>.";
        return $result;
    }
    else
    {
        $result = $email ." n'est pas un format valide.";
        return $result;
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = $email. " est un email valide.";
        return $result;
    }
    else
    {
        $result = $email ." n'est pas un format valide<br>.";
        return $result;
    }
}
$result ="";
$email = "elan@elan-formation.fr";
echo verifierEmail($email);
$email = "contact@elan";
echo verifierEmail($email);