<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Sabre\DAV\Client;

$settings = [
    'baseUri'  => 'https://localhost:9200/remote.php/webdav/',
    'accessToken' => 'eyJhbGciOiJQUzI1NiIsImtpZCI6InByaXZhdGUta2V5IiwidHlwIjoiSldUIn0.eyJhdWQiOiJ3ZWIiLCJleHAiOjE2OTIyNDg2OTQsImlhdCI6MTY5MjI0ODM5NCwiaXNzIjoiaHR0cHM6Ly9sb2NhbGhvc3Q6OTIwMCIsImp0aSI6Ilc1RVA0elA3b0pJcVh3QTlIalowdmRtOFFFNFZzVjBZIiwibGcuaSI6eyJkbiI6IkFkbWluIiwiaWQiOiJvd25DbG91ZFVVSUQ9MzY4YzczNjctNGJiOS00NzMwLThmODQtYjNhMGQ4MWJmMzY3IiwidW4iOiJhZG1pbiJ9LCJsZy5wIjoiaWRlbnRpZmllci1sZGFwIiwibGcudCI6IjEiLCJzY3AiOiJvcGVuaWQgcHJvZmlsZSBlbWFpbCIsInN1YiI6InctZFNBaG1uYmZOS3NuLXFALUxDTDk1SjgzU2FwcEhIVXJfa0V0ckNkQXFVbGRMZzVtZ05GMDk3WVVIM1R3bzkyQk80UVFxMFNMd3NQNkw3bzhXVlU2QSJ9.Zrpsal63_6MB04FFjpXEejFxjEheChIdCZ4wKHYM4-edEUe_DcpzZa39hGq1jfNlFUBMLXzSoX-XpT-ltpe2bqEGWGuMy5r7FSXdhoVL-gXu2au_KWfFoYZXujomjjoZE2-v5-lBkj4rov00KFU6MgkJfYUa252gxE7kGearU1FjJQE5KIVUfOlwCi35oQMfmdols_j1Mzk-sy98s7_yi2zSlbG2MswO9cS0wB6t7ye7Erk2hifrvjmjhWh_fvdRDzWg34mqm2HhCQ7j79sencibP3TGG8ZvaRHKUT3c6MQLPsR-8rP1gCiTfsw0_ueHgXl8Yui-J7RsEh7Oe_emZUUX2iT2SVlpWQI6TZjei5szCEIUZ_eVbztTieOFAZ1y-5VFd7-jpGWID_uSjJigD2on53-0xwNsHrDvUY9LazNDPm1kUVns9LzqTNgXFLCx4y9TQjDzC6kZkEIhQP_KaHdrN9LASrfjM2CPUA2aEvhkl9KGIbeLIN2_zKYn2EP7DIrMw95gj6-aBFaJ5K7ctGY2atXjB1IuehpK1zZkcbdXh83aZbuDf6iChAf7vrs-eoYB2Ny1FDztDgyVLW13JfKF64gKxuemiLRDksQNLe2vhaFnZqzR4K05gyF51W6mHZoO1Zm7vif2DptR91MipmJKUjeSAmpA_cq7j9w2wp8'
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