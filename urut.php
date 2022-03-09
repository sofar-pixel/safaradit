<?php

$lines = file('data.txt');
sort($lines);

foreach($lines as $tanggal){
echo"$tanggal<br>";
}

?>