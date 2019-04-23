<?php
$file = "example.txt";

if ($handle = fopen($file, 'w')) {

    fwrite($handle, 'hey you!');
    fclose($handle);
} else {
    echo "no go commando";
}
?>
