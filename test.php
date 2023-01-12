<?php

// require 'vendor/pear/http_request2/HTTP/Request2.php';
// $request = new HttpRequest();
// $request->setUrl('https://webknox-question-answering.p.rapidapi.com/questions/answers');
// $request->setMethod(HTTP_METH_GET);

// $request->setQueryData([
// 	'question' => 'Where is Los Angeles?',
// 	'answerLookup' => 'checked',
// 	'answerSearch' => 'checked'
// ]);

// $request->setHeaders([
// 	'X-RapidAPI-Key' => '8b6071aa1emshd2262fc8ee857b4p12ba93jsn787c8e1b62fb',
// 	'X-RapidAPI-Host' => 'webknox-question-answering.p.rapidapi.com'
// ]);

// try {
// 	$response = $request->send();

// 	echo $response->getBody();
// } catch (HttpException $ex) {
// 	echo $ex;
// }



// require 'path/to/google-search-results.php';
// require 'path/to/restclient.php';
// require 'vendor/serpapi/google-search-results-php/googole-search-results.php';
// require 'vendor/serpapi/google-search-results-php/restclient.php';

// $query = [
//  "q" => "What's the definition of transparent?",
//  "hl" => "en",
//  "gl" => "us",
// ];

// $search = new GoogleSearch('fa751023a09ce65e0912769a0b7b02182eca1413af80633284cf660490506674');
// $result = $search->get_json($query);
// $answer_box = $result->answer_box;



require __DIR__ . '/vendor/autoload.php';

// require 'path/to/google-search-results.php';
// require 'path/to/restclient.php';
// require __DIR__ . '/vendor/serpapi/google-search-results-php/googole-search-results.php';
// require __DIR__ . '/vendor/serpapi/google-search-results-php/restclient.php';
include_once( __DIR__.'/vendor/serpapi/google-search-results-php/google-search-results.php');
include_once( __DIR__.'/vendor/serpapi/google-search-results-php/restclient.php');

$query = [
 "q" => "PI",
 "hl" => "en",
 "gl" => "us",
];

$search = new GoogleSearch('fa751023a09ce65e0912769a0b7b02182eca1413af80633284cf660490506674');
$result = $search->get_json($query);
$answer_box = $result->answer_box;
?>