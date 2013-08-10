<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function now() {
    return date("Y-m-d H:i:s");
}

function whitelist($text,$symbols) {
    return preg_replace("/[^" . preg_quote($symbols, '/') . "]/i", "", $text);
}

function escapesql($text) {
    return str_replace("'", "''", $text);
}
?>

