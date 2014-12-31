<?php

$uri = 'https://api.citrixonline.com/G2W/rest/organizers/MyOrgID/upcomingWebinars';
$ch = curl_init($uri);
curl_setopt_array($ch, array(
    CURLOPT_HTTPHEADER  => array('Content-type:application/json', 'Accept: application/json', 'Authorization: OAuth oauth_token=MyOAuthToken'),
    CURLOPT_RETURNTRANSFER  =>true,
    CURLOPT_VERBOSE     => 1
));
$out = curl_exec($ch);
curl_close($ch);
// echo response output
echo $out;


?>
