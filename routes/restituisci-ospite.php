<?php

include '../functions.php';

$id_ospite = $_GET['id'];

$query = 'SELECT * FROM ospiti WHERE id = ' . $id_ospite;

//true produce un Json anzichè un arrayPHP
echo getResultsFromQuery($query, true);

 ?>
