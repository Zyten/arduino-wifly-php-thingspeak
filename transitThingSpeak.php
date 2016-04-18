<?php
 
$API_KEY = "YOUR_THINGSPEAK_API_KEY";
$temp= 0;
$humidity= 0;
$dust= 0;

$temp= $_GET['temp'];
if($temp == 0) {
  echo '{"temp":"0"}';
  exit(0);
}
echo '{"temp":"'.$temp.'"}';

$humidity= $_GET['humidity'];
if($humidity== 0) {
  echo '{"humidity":"0"}';
  exit(0);
}
echo '{"humidity":"'.$humidity.'"}';

$dust= $_GET['dust'];
if($dust== 0) {
  echo '{"dust":"0"}';
  exit(0);
}
echo '{"dust":"'.$dust.'"} <br>';

$url = "http://api.thingspeak.com/update?key=".$API_KEY."&field1=".$temp."&field2=".$humidity."&field3=".$dust;

$curl_handle = curl_init();
curl_setopt( $curl_handle, CURLOPT_URL, $url );
curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt( $curl_handle, CURLOPT_FOLLOWLOCATION, 0);
curl_exec( $curl_handle );
curl_close( $curl_handle );


echo '{"transit":"SUCCESS"}';
?>					