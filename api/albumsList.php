<?php

require "../db/db.php";






header("Content-Type: application/json");

echo json_encode([
    "pagina" => 1,
    "tot_pagine" => 1,
    "dati" => $dati
]);
