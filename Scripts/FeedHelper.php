<?php


//Some basic set-up: error reporting...
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 'off');

// ...default date...
date_default_timezone_set('Atlantic/Canary');


//...making sure we have access to Zend...

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . '/usr/share/php/library/');

//And for the remote file (comment out the previous line
// for remote and comment out the following for localhost)

//ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . //'/home/dino/public_html/library/ZendFramework-1.7.2/library/');

//...and getting the Zend class loader that will
//take care of pretty much everything Zend-related for us.
require_once("Zend/Loader.php");

//Our feed we define with a constant for ease of reference
define("BARSOOMURL", "http://barsoomcore.blogspot.com/feeds/posts/default/-/DinoPirates");
define("SFURL", "http://scratchfactory.blogspot.com/feeds/posts/default/-/DINO-PIRATES");

//see how handy that Zend Loader is?
Zend_Loader::LoadClass('Zend_Feed');

//this function takes a URL and spits back an array
//with the four basic entry items we require
function getFeed($feedURL) {

try { $EventsRss = Zend_Feed::import($feedURL);}

catch (Zend_Feed_ExceptionÊ$e) { 

echo "ExceptionÊcaughtÊimportingÊfeed:Ê{$e->getMessage()}\n";
ÊÊÊÊexit;
}

//ÊInitializeÊtheÊchannelÊdataÊarray
$channel = array(
	'items'			=> array()
	);
	
//ÊLoopÊoverÊeachÊchannelÊitemÊandÊstoreÊrelevantÊdata
foreach ($EventsRss as $item) {
	$channel['items'][] = array(
		'title'			=> $item->title(),
		'content'	=> $item->content(),
		'link'		=> $item->link('alternate'),
		'date'		=> $item->published(),
		);
	}

//since we're not using any feed-level data, just the entries,
//we can collapse the $channel array before returning
return($channel['items']);
}

//turns atom Dates into pretty ones
function formatDate ($feedDate) {
	$timestamp = strtotime($feedDate);
	$formattedDate = date("F j, Y", $timestamp);
	return $formattedDate;
}

?>