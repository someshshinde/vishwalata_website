<?php

function formatDateWithSuffix($dateString)
{
    $date = new DateTime($dateString);
    $day = $date->format('j');
    $daySuffix = getDaySuffix($day);
    return $day . $daySuffix . ' ' . $date->format('F, Y');
}

function getDaySuffix($day)
{
    if (!in_array(($day % 100), [11, 12, 13])) {
        switch ($day % 10) {
            case 1: return 'st';
            case 2: return 'nd';
            case 3: return 'rd';
        }
    }
    return 'th';
}
function formatDate($dateString)
{
    $date = new DateTime($dateString);
    return $date->format('F j, Y');
}