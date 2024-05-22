<?php
header('Content-Type: application/json');
$angka_1 = $_POST["angka-1"];
$angka_2 = $_POST["angka-2"];
$operator = $_POST["operator"];
if ($operator == "+") {
    $result = $angka_1 + $angka_2;
} elseif ($operator == "-") {
    $result = $angka_1 - $angka_2;
} elseif ($operator == "x") {
    $result = $angka_1 * $angka_2;
} elseif ($operator == ":") {
    $result = $angka_1 / $angka_2;
} else {
    $result = "Masukin nya yang bener dek!";
}
$response = [
    "status" => "success",
    "result" => $result,
];
echo json_encode($response);
