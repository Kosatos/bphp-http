
<?php
// ### PAGE 4 ###

// start a session
session_start();

echo 'It`s page 4' . PHP_EOL;

echo 'Количество открытий страницы 3: ' . $_SESSION['count'] . PHP_EOL;  // access session variable