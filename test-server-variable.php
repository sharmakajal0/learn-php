<?php
    header('Content-Type: application/json');
    echo json_encode(array(
        'server' => $_SERVER,
        'request' => $_REQUEST,
        'get' => $_GET,
        'post' => $_POST
    ));
?>