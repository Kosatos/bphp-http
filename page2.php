
<?php
// ### PAGE 2 ###

header('Content-Type: text/plain');
header('Content-disposition: attachment; filename="downloaded.txt"');

echo $_GET["text"];