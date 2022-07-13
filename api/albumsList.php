<?php

require "../db/db.php";
var_dump($albumsList);

header("Content-Type: application/json");

echo json_encode([
    "pagina" => 1,
    "tot_pagine" => 1,
    "albumsList" => $albumsList
]);
