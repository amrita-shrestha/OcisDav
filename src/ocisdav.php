<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Sabre\DAV\Client;

$settings = [
    'baseUri'  => 'https://localhost:9200/remote.php/webdav/',
    'accessToken' => 'eyJhbGciOiJQUzI1NiIsImtpZCI6InByaXZhdGUta2V5IiwidHlwIjoiSldUIn0.eyJhdWQiOiJ3ZWIiLCJleHAiOjE2OTIyNTI5MTAsImlhdCI6MTY5MjI1MjYxMCwiaXNzIjoiaHR0cHM6Ly9sb2NhbGhvc3Q6OTIwMCIsImp0aSI6IlU2ZVk1QzVUT3ZlTnlKbGNiaXVnSEhqak9NMzJCQnNSIiwibGcuaSI6eyJkbiI6IkFkbWluIiwiaWQiOiJvd25DbG91ZFVVSUQ9MzY4YzczNjctNGJiOS00NzMwLThmODQtYjNhMGQ4MWJmMzY3IiwidW4iOiJhZG1pbiJ9LCJsZy5wIjoiaWRlbnRpZmllci1sZGFwIiwibGcudCI6IjEiLCJzY3AiOiJvcGVuaWQgcHJvZmlsZSBlbWFpbCIsInN1YiI6InctZFNBaG1uYmZOS3NuLXFALUxDTDk1SjgzU2FwcEhIVXJfa0V0ckNkQXFVbGRMZzVtZ05GMDk3WVVIM1R3bzkyQk80UVFxMFNMd3NQNkw3bzhXVlU2QSJ9.ldF4rylXurCyhk_bQni-1GrgCoHSHx62HHCvKp0XoAs6cIOvcR_HEXkuBV7QzhVJ6siweWcAsSv7bvzQRGRNUpoAPn06IftulqeXAKBTm-9iTbNcwJVhVMlJSpSwJ39QCLWgR_BPnqx50Fp_yigdw99_7Z9t6mefleoFdRnMEnYHyICUcdAdqeWQM_f4qdspy0GMJVtRc1pHNuc4G1Qb-IOoJFvSXkuhPb1a1FT5DENcU0qis6wgfc_x7IW5CIlwJXlWAvmRcZRs5r1SqLPlyZNMYa59cXrXDsdpKkdoFO4dcobI8t4Wxl6ZMZOvDZrBIlN0juY4PjsrWbnewmnKEPaQ_Xw3yE2f66XRWftL58jHhu39RndrUQSHEI-VzVCa2qzyNO8Vk8SF8_t_pLKnuXHYJFqFyoi6HO6Q50mXGWFrx0wJ5w3q38k76aNQjjHdfaawTmxjsq9g8t1IOaXgLo2UXu3fg1ZEsc1PAykIg25wM5wr0XssgptLbagOxLSDKMW5mopXxGHjP0M8Aytj-VGrHaVEP71qVT-47I1VAvzZPbg-HW6OStBD-aeDcUC4kmY7OIJLWLcaWkxKhQxYevLCnxPtHm-vowSGwzWkLUX6lgdLOrUIScI9t0amehICYH7pfFqM-fNVuB9Nbit3cEudkv37lFoXDngj9cH76j4'
];
//$newDirectoryName = "Testing";


// Creating the client
$client = new Client($settings);

//$client->addCurlSetting(CURLOPT_HTTPHEADER, $headers);
$client->addCurlSetting(CURLOPT_SSL_VERIFYHOST,0);
$client->addCurlSetting(CURLOPT_SSL_VERIFYPEER,0);
$client->addCurlSetting(CURLINFO_HEADER_OUT,true);

$response = $client->request('MKCOL', "Parent");
//$sentHeaders = curl_getinfo($response, CURLINFO_HEADER_OUT);
//echo $sentHeaders;

//$response = $client->request('PROPFIND', '');
//$response = $client->request('PUT', 'file.txt', "New contents");

//if ($response['statusCode'] === 201) {
//    echo 'Directory created successfully.';
//} else {
//    echo 'Failed to create directory. HTTP status code: ' . $response['statusCode'];
//}
print_r($response["statusCode"]);