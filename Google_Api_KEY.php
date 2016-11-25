<?php

// your API key here
$API_KEY = 'AIzaSyAcgEwagKMKbhtVUjLeXIzHCX4ZwvrGRlc';

// this will include the libraries that were gotten with composer or downloaded directly
require_once 'vendor/autoload.php';

// instantiate the Google API Client
$client = new Google_Client();
$client->setApplicationName("ScanBook");
$client->setDeveloperKey( $API_KEY );

// get an instance of the Google Books client
$service = new Google_Service_Books($client);

// set options for your request
$optParams = array('filter' => 'paid-ebooks');
$query = "Harry Potter";

// make the API call to retrieve some search results
$results = $service->volumes->listVolumes($query, $optParams);

foreach ($results as $item) {
	print('<img src="'.rawurldecode($item['volumeInfo']['imageLinks']['smallThumbnail']).'" /><br />');
	print("Title: " . $item['volumeInfo']['title'] . '</br>');
	print("author:" . $item['volumeInfo']['authors'][0].'</br>');	  
	print("Number of Pages " .	$item['volumeInfo']['pageCount'] . '</br>');
}

?>

