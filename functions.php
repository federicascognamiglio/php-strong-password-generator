<?php
$password_length = isset($_GET['length']) && is_numeric($_GET['length']) ? (int)$_GET['length'] : 0;
$allow_uppercase = isset($_GET['uppercase']) && $_GET['uppercase'] == 'on' ? true : false;
$allow_lowercase = isset($_GET['lowercase']) && $_GET['lowercase'] == 'on' ? true : false;
$allow_numbers = isset($_GET['numbers']) && $_GET['numbers'] == 'on' ? true : false;
$allow_symbols = isset($_GET['symbols']) && $_GET['symbols'] == 'on' ? true : false;

function generate_password($length) {
    global $allow_uppercase, $allow_lowercase, $allow_numbers, $allow_symbols;

    if ($length > 4 && $length < 21) {
        // Characters
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $symbols = '!@#$%^&*_+-=|;:,.<>?';
        $all_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_+-=|;:,.<>?';
        // Password variable
        $password = '';
        // Password generation
        for ($i = 0; $i < $length; $i++) {
            if(!$allow_uppercase && !$allow_lowercase && !$allow_numbers && !$allow_symbols) {
                $password .= $all_chars[rand(0, strlen($all_chars) - 1)];
            } else {
                $chars = '';
                if ($allow_uppercase) $chars .= $uppercase;
                if ($allow_lowercase) $chars .= $lowercase;
                if ($allow_numbers) $chars .= $numbers;
                if ($allow_symbols) $chars .= $symbols;
                $password .= $chars[rand(0, strlen($chars) - 1)];
            }
        }
        return $password;
    }
}

?>