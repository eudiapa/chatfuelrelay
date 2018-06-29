<?php

$obj = (object) [
    'set_attributes' => (object)[
      'sessionId' => uniqid()
      ]
];

header('Content-Type: application/json');
echo json_encode($obj);
