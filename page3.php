<?php
// ### PAGE 3 ###

// start a session
session_start();

echo 'It`s page 3' . PHP_EOL;

$_SESSION['count'] = isset($_SESSION['count']) ?
    ++$_SESSION['count'] : 0;

if ( $_SESSION['count'] % 3 === 0) {
    header('Location: http://localhost:8000/page4.php');
}