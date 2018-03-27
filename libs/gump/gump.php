<?php
require __DIR__."/../../vendor/autoload.php";

$array = [
    'username' => 'admin',
    'password' => '123456',
    'ip' => '127.0.0.255',
    'json' => json_encode([1 => 'asd']),
    'url' => 'http://ya.ru/'
];
$result = GUMP::is_valid($array, [
    'username' => 'required|alpha_numeric',
    'password' => 'required|max_len,100|min_len,6',
    'ip' => 'valid_ip',
    'json' => 'valid_json_string',
    'url' => 'valid_url'
]);

echo "<pre>";
var_dump($result);
if ($result) {
    echo 'EVERYTHING FINE';
}
?>
<style>
    body {
        font-size: 2em;
        font-weight: bold;
    }
</style>
