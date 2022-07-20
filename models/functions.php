<?php

function print_r_easy($variable, $exit = true)
{
    echo '<pre>';
    print_r($variable);
    echo '</pre>';

    if ($exit) {
        exit;
    }
}