<?php

$users = [" rAHim@gmail.com ", " kArim@outlook.com ", " sUmi@yahoo.com "];

foreach ($users as $user) {
    $user = trim($user);

    $atPos = strpos($user, "@");
    $rawName = substr($user, 0, $atPos);
    $domain = substr($user, $atPos + 1);

    $name = ucfirst(strtolower($rawName));

    echo "Name: $name, Domain: $domain\n";
}

?>