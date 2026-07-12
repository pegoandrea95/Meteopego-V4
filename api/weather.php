<?php
header('Content-Type: application/json');

$mb = "http://192.168.1.234/cgi-bin/template.cgi?template=";

function mb($tag, $base)
{
    return trim(@file_get_contents($base . urlencode($tag)));
}

echo json_encode([
    "temperature" => mb("[th0temp-act]", $mb),
    "humidity"    => mb("[th0hum-act]", $mb),
    "wind"        => mb("[wind0wind-act]", $mb),
    "rain"        => mb("[rain0total-day]", $mb),
    "pressure"    => mb("[thb0seapress-act]", $mb),
    "uv"          => mb("[uv0index-act]", $mb)
]);