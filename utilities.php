<?php
function register($email)
{
    if ($email == !null) {
        if (str_contains($email, '@') && str_contains($email, '.')) {
            return true;
        } else {
            return false;
        }
    }
}
