<?php

$lines = file('data.txt');
rsort($lines);

foreach($lines as $tanggal){
echo"$tanggal<br>";
}

?>