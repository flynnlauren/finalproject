<?php
$array = [
    "userData"       => $_POST['userName'],
    "computedString" => "Hello, " . $_POST['userName']
];
echo json_encode($array);
?>
