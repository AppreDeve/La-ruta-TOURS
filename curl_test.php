<?php
$ch = curl_init('https://www.google.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if(curl_errno($ch)) {
    echo 'Error en cURL: ' . curl_error($ch);
} else {
    echo 'cURL funciona correctamente. La respuesta tiene ' . strlen($response) . ' caracteres.';
}
curl_close($ch);
?>
