<?php

/**
 * Diese Funktion Formatiert die Datumsangabe in das deutsche Format
 * @return string
 */

function germanDateTime($dateTime)
{
    $unixTime = strtotime($dateTime);

    return date('d.m.Y H:i:s', $unixTime);
}
