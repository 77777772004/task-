<?php
$userId = $_GET["userId"];
$filename = "tasks_$userId.json";
if (file_exists($filename)) {
    echo file_get_contents($filename);
} else {
    echo json_encode(["todo" => [], "in-progress" => [], "done" => []]);
}
?>