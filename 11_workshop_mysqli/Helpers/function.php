<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function dd(...$params)
{
  foreach ($params as $param) {
    var_dump($param);
  }
  die;
}


function session($key) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    return $_SESSION[$key];
}
