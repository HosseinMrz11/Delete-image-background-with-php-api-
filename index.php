<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.remove.bg/v1.0/removebg');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$post = array(
    //'image_file' => 'image local address'),
    'image_url' => 'url image address',
    'size' => 'auto'
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$headers = array();
$headers[] = 'X-Api-Key: your api key';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
curl_close($ch);


$fp = fopen("deletedbg.png", "wb");
fwrite($fp, $result);
fclose($fp);
?>


