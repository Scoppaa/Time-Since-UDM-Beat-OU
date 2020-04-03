#!/usr/bin/php
<?php 
    //Time Logic
    $now = time(); // or your date as well
    $loss = strtotime("2017-01-13");
    $elapsed = $now - $loss;
    $totaldays = round($elapsed / (60 * 60 * 24));
    
    $years = round($totaldays/365);
    
    $days = ($totaldays - ($years*365)-1);

	// include config and twitter api wrappe
	require_once( 'config.php' );
	require_once( 'TwitterAPIExchange.php' );

	// settings for twitter api connection
	$settings = array(
		'oauth_access_token' => TWITTER_ACCESS_TOKEN, 
		'oauth_access_token_secret' => TWITTER_ACCESS_TOKEN_SECRET, 
		'consumer_key' => TWITTER_CONSUMER_KEY, 
		'consumer_secret' => TWITTER_CONSUMER_SECRET
	);

	// twitter api endpoint
	$url = 'https://api.twitter.com/1.1/statuses/update.json';

	// twitter api endpoint request type
	$requestMethod = 'POST';

	// twitter api endpoint data
	$apiData = array(
	    'status' => 'It has been ' . $totaldays . ' days (' . $years . ' years and ' . $days . ' days) since Detroit Mercy beat Oakland',
	);

	// create new twitter for api communication
	$twitter = new TwitterAPIExchange( $settings );

	// make our api call to twiiter
	$twitter->buildOauth( $url, $requestMethod );
	$twitter->setPostfields( $apiData );
	$response = $twitter->performRequest( true, array( CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_SSL_VERIFYPEER => 0 ) );

	// display response from twitter
    echo '<pre>';
    print_r( json_decode( $response, true ) );
?>
