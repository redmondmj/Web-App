<?php

$availableLanguages = ['en','de','es'];

    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $langs = explode(" ", $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        foreach ($langs as $value) {
            $choice = substr($value, 0, 2);
            if (in_array($choice, $availableLanguages, true)) {
                echo $choice . "<br/>";
            }
        }
    }
