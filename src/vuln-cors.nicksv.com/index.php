<?php
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
}

header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json");

function getCookie($name) {
    if (isset($_COOKIE[$name])) {
        return $_COOKIE[$name];
    } else {
        return false;
    }
}

$cookieName = 'test';

$cookieValue = getCookie($cookieName);

if ($cookieValue === false) {
    http_response_code(401);
    echo json_encode(['message' => 'Unauthorized access: No cookie found']);
} else {
    $response = array(
        "message" => "Cookie value found",
        "cookie" => $cookieValue
    );

    $jsonResponse = json_encode($response);

    echo $jsonResponse;
}
?>