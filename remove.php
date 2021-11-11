<?php
$file=fopen('file.csv','r');
$lines = array();
while(!feof($file) && ($line = fgetcsv($file)) !== false) {
    $lines[] = $line;
}
fclose($file);
$newlist=array();
$index=$_GET['index'];
    print_r( $_GET['index']);
    foreach($lines as $key=>$item)
    {
       if(!in_array($key,$index))
       array_push($newlist,$item);
    }
    print_r( $newlist);

    $fp=fopen('file.csv','w');
    foreach($newlist as $item)
    fputcsv($fp,$item);
    fclose($fp);
    header("Location:index.php");
    exit();
?>