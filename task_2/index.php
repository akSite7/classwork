<?php

$college = array (
    "Студенты" => array("Никита", "Гена", "Костя"),
    "Преподаватели" => array ("США", "9/11")
);

foreach ($college as $people => $items) {
    echo "<h1>$people</h1>";
    echo "<ul>";
    foreach ($items as $item => $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}


