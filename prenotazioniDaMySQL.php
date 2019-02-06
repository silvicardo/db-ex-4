<?php

include 'functions.php';

$tutteLePrenotazioni = getResultsFromQuery('SELECT `id`,`prenotazione_id`,`ospite_id` FROM `prenotazioni_has_ospiti`');

 ?>
