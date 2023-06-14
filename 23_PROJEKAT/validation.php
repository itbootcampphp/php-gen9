<?php

function usernameValidation($u, $c)
{
    $query = "SELECT * FROM `users` WHERE `username` = '$u'";
    $result = $c->query($query);

    if (empty($u))
    {
        return "Username cannot be blank";
    }
    elseif (preg_match('/\s/', $u))
    {
        return "Username cannot contain spaces";
    }
    elseif (strlen($u) < 5 || strlen($u) > 25)
    {
        return "Username must be between 5 and 25 characters";
    }
    elseif ($result->num_rows > 0)
    {
        return "Username is reserved, please choose another one";
    }
    else
    {
        return "";
    }
}

function passwordValidation($u)
{
    if (empty($u))
    {
        return "Password cannot be blank";
    }
    elseif (preg_match('/\s/', $u))
    {
        return "Password cannot contain spaces";
    }
    elseif (strlen($u) < 5 || strlen($u) > 50)
    {
        return "Password must be between 5 and 50 characters";
    }
    else
    {
        return "";
    }
}

?>