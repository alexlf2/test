<?php 

$url = "http://localhost/formdata/curl.php";

$ch = curl_init($url);

// Create a CURLFile object
$cfile = new CURLFile('cats.jpg','image/jpeg','test_name');

// Assign POST data
$data = array('test_file' => "test", 'test' => $cfile);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the handle
$resultat = curl_exec($ch);

echo $resultat;