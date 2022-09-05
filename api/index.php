<?php


require '../versione1/discs/data.php';


header('Content-Type: application/json');
echo json_encode($discs);
?>