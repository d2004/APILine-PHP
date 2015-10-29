<?php
/* This is only an example */

// 1) Include the callback return scritps of APILine
include 'APILine/includer.php';
include 'APILine/callback.php';

// 2) my return data example (you can found in the API dashboard) is in POST and there are name, lastname, email 
$requestMethod = "POST"; // the type of the request
$dataValues = array( // the variables to save and the name
  'name' => 'name';
  'lastname' => 'lastname';
  'email' => 'email';
);

// 3) create the APILine data and prepare it
$apiLine = new ApiLineCallBack;
$apiLine -> getReady();

// 4) Receive and do
$Save = $apiLine -> Save(); // apiLine Saves the variables in cookies

//--------------------- UNDER THIS LINE IS AN A TRY of THE REDIRECT-TO LINK CALLBACK SCRIPT ---------------------//
// 5) Set the Redirection URL
$urlRedirection = "https://login.example.com/api-login?access_token"; // insert the redirection url

// 6) do the Redirect with POST send of the data
$sendMethod = "POST"; // POST or GET
$loadDirect = $apiLine -> pushRedirection($urlRedirection); // execute the redirection

//--------------------- UNDER THIS LINE IS AN A TRY of THE DO-SCRIPT CALLBACK SCRIPT ---------------------------//

// 5) Generate the variables
//                                INSERT THE VARIABLES NAME OF THE INSERT IN $dataValues
$apiLine1 = $apiLine -> createVars('name','lastname','email');

// 6) Type the script
echo "This is an example of <a href=\'https://github.com/d2004/APILine-PHP\'>APILine PHP</a> by Davide Ramondetti";
echo "API Url: https://api.example.com/";
echo "Name: ".$name;
echo "Last Name: ".$lastname;
echo "Email: ".$email;

//------------------- FINISH EXAMPLE -------------------//

// 7) Close the apiLine execution
$apiLinedelay = $apiLine -> close();
