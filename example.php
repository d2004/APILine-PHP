<?php
/* THIS IS AN A EXAMPLE!! YOU MUST DO NOT UPLOAD THIS FILE ON YOUR CLIENT!! */
require_once 'APILine/includer.php';
$apiUrl = "https://api.example.com/"; // root domain of the API Link
$apiPage = "api-page.php?access_token" // page of the API
$addedValues = array( // added values (ex: access_token, scope, name, auths, RedirURL)
  'access_token' => 'MY_ACCESS_TOKEN',
  'scope' => 'example_1, example2', 
  'name' => 'boh',
  'auths' => 'like1,like2',
  'RedirURL' => 'https://account.example.com/loginWithExample?exampleReturn'
);
$anotherRequests= "print results"; // another request to the webserver
$connectFall = "https://account.example.com/loginWithExample?falseConnection"; // in case of false connection
$apiLine = new ApiLine; // create the ApiLine class
$ans = $apiLine -> saveValues($apiUrl,$apiPage,$addedValues,$anotherRequests,$connectFall);
$ans = $apiLine -> getReady();
if ($ans == true) {
  $e = $apiLine -> redirect();
} else {
  exit($apiLine -> getError());
}
