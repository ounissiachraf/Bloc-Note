<?php 

$file=fopen('file.csv','r');

/*Mettre les données dans un tableau*/
$lines = array();
while(!feof($file) && ($line = fgetcsv($file)) !== false) {
    $lines[] = $line;
}
    include 'index.phtml'
?>