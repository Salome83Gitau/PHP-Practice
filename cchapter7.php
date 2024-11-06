<?php
function stringOutput($arg1, $arg2) {
    $result = "My name is ".$arg1 . " and I live in " . $arg2;
    return $result;
}

echo stringOutput("John", "Nairobi");

function table($string1, $string2, $string3, $string4){
    $tableHTML = "<table border='1'><br>";
    $tableHTML .= "<tr><br>";
    $tableHTML .= "<td>" . $string1. "</td><br>";
    $tableHTML .= "<td>" . $string2. "</td><br>";
    $tableHTML .= "<td>" . $string3. "</td><br>";
    $tableHTML .= "<td>" . $string4. "</td><br>";
    $tableHTML .= "</tr><br>";
    $tableHTML .= "</table><br>";

    return $tableHTML;
}

echo table("Alice", "Bob", "Charlie", "Diana");


?>