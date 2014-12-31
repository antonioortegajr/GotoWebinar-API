<?php

// This can be found in you GotoWebinar account
$YourOrgID = 'MyOrgID';
//You will need to create an OAuth Token
$YourOAuthToken = "MyOAuthToken";

$uri = 'https://api.citrixonline.com/G2W/rest/organizers/'.$YourOrgID . '/upcomingWebinars';
$ch = curl_init($uri);
curl_setopt_array($ch, array(
    CURLOPT_HTTPHEADER  => array('Content-type:application/json', 'Accept: application/json', 'Authorization: OAuth oauth_token='. $YourOAuthToken),
    CURLOPT_RETURNTRANSFER  =>true,
    CURLOPT_VERBOSE     => 1
));
$out = curl_exec($ch);
curl_close($ch);
// echo response output
echo $out;


?>
