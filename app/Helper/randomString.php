<?php

use Illuminate\Support\Str;

/**
 * Diese Funktion erstellt erstellt ein Random-String mit 50 Zeichen
 * @return string
 */

function randomString(): string
{
    return Str::random(50);
}
