<?php
require __DIR__."/../../vendor/autoload.php";

$array = [
    'username' => 'admin',
    'password' => '123',
    'ip' => '127.0.0.256',
    'json' => json_encode([1 => 'asd']),
    'url' => 'ya.ru/'
];
$result = GUMP::is_valid($array, [
    'username' => 'required|alpha_numeric',
    'password' => 'required|max_len,100|min_len,6',
    'ip' => 'valid_ip',
    'json' => 'valid_json_string',
    'url' => 'valid_url'
]);



echo "<pre>";
print_r($result);
?>
<style>
    body {
        font-size: 2em;
        font-weight: bold;
    }
</style>
