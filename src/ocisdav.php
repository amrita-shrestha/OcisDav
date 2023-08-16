<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Sabre\DAV\Client;

$settings = [
    'baseUri'  => 'https://localhost:9200/remote.php/webdav/',
    'accessToken' => 'eyJhbGciOiJQUzI1NiIsImtpZCI6InByaXZhdGUta2V5IiwidHlwIjoiSldUIn0.eyJhdWQiOiJ3ZWIiLCJleHAiOjE2OTIxODU1NTAsImlhdCI6MTY5MjE4NTI1MCwiaXNzIjoiaHR0cHM6Ly9sb2NhbGhvc3Q6OTIwMCIsImp0aSI6IklUemgtVk4xM3hlRWs5czRDMGw4MXNTVld0a0pmNE1RIiwibGcuaSI6eyJkbiI6IkFkbWluIiwiaWQiOiJvd25DbG91ZFVVSUQ9NThkZjBkYmQtNzQyMS00OTM2LWE2MWQtM2VjYzkzMzgwNzMzIiwidW4iOiJhZG1pbiJ9LCJsZy5wIjoiaWRlbnRpZmllci1sZGFwIiwibGcudCI6IjEiLCJzY3AiOiJlbWFpbCBvcGVuaWQgcHJvZmlsZSIsInN1YiI6ImFCWS1tSGlCd29venQwS0tAdENlN3NPYkx0VmRCQVItczh0MDcyZm1LNUYzR3VybzBTZGVBMnE1SXV2d2dKeFFrV1BORFFHUElpcC0zaWR0OWs3clJEZyJ9.sCDFdrzsSiJjsj6rsmnvDeRsuSVhgXWzHVXkE7TMcjd6nm9tIcNNVWaBlTkrV6HUp38o24s7EZNZaSOXBiVoeiNTRzpdzJdWgs_p-fjweL7mzjZBSpkSjIyWVuKwMc2XjYa_lofXF_iGMBG1OLy9kHrlCEOGpC0Lu23d5sRaBkEeVNMucOnBIFi4c87cXXGeS11DyaWwqARum_7FJoNbgUiuaPsHoiikQqxYP-xSQwj0O7Ea02eaulfKaq0YfV-Xmx_jdq8Zg4yTStzoH5gXp3gkyEY1hGsb9Gy-pBpZfDLAzQEu2Wg5M0QBUoK6i8HgxuPxnUx-y1hbfN6k5TXC7MjBio0ZI5XHHjBTQGfU08sEN0u35gt3Wax3deDh_OTB3m_5Cgl5i4kZZBs4YxzveL2bR-bJGu_5s5eCnrvFH-6tW9dwxjwhrNsXfB-Dfoz3i_jsZO2g8tTBAWglob-Xahl2F-TN2J8x1MVI0aS76txDlMyECF2XbXT9GTpn_2A6HIY6e7fVk8ad47rOKGjtkmdfH341o-namZeT0P2YBhn_Mu2THLHaSyeiFBZU5ECetfwKlVoBNDY0zq9oye5gE6MA30kNCNuh0T5QWvQELxL63goNZjDmbtO1KqYwV15YKeV_qSIGSA8lHnscle0Ad_OPrSjQcBdan4XktcOqaeA',
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