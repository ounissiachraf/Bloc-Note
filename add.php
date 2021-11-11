<?php

$journee=$_GET['jour'].'-'.$_GET['mois'].'-'.$_GET['annee'];

$data=array($_GET['titre'],$_GET['description'],$journee,$_GET['pr']);

$fp = fopen('file.csv', 'a');

fputcsv($fp, $data);

fclose($fp);

header("Location:index.php");

exit();

?>