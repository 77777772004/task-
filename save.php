<?php
$data = json_decode(file_get_contents("php://input"), true);
$userId = $data["userId"];
$tasks = $data["tasks"];
file_put_contents("tasks_$userId.json", json_encode($tasks));
?>