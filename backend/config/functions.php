<?php
function redirect($location)
{
    header("Location: {$location}");
    exit();
}

function now()
{
    return (new \DateTime())->format('Y-m-d H:i:s');
}

function hash_password($password){

    return password_hash($password, PASSWORD_BCRYPT);
}


function StrLimit($text, $limit = 120) {
    if (strlen($text) <= $limit) {
        return $text; 
    }
    return substr($text, 0, $limit) . '...'; 
}


