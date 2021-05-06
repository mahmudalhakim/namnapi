<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");
header("Content-Type: application/json; charset=UTF-8");

$firstNames = ["Åsa", "Mahmud", "Yasmin", "Kalle", "Adam", "Bertil", "Mehdi", "Mariam", "Yasir", "Dania"];
$lastNames = ["Öberg", "Al Hakim", "Ericson", "Ek", "Shmara", "Bengtson", "Amir", "Otaifa", "Holmberg", "Testson"];

$names = array();

for ($i = 0; $i < 10; $i++) {
    $name = array(
        "firstname" => $firstNames[rand(0, 9)],
        "lastname" => $lastNames[rand(0, 9)]
    );
    array_push($names, $name);
}

$json = json_encode($names, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo $json;
