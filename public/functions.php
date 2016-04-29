<?php

function inputHas($key) {
   return isset($_REQUEST[$key]) ? TRUE : FALSE;
}

function inputGet($key) {
    return isset($_REQUEST[$key]) ? $_REQUEST[$key] : 0;
}

?>