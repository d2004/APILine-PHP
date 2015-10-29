<?php
/*****************************************
 * Copyright (c) 2015 D2004 on Github *
 * https://github.com/d2004/APILine-PHP *
 *            APILine PHP             *
******************************************/

class ApiLine {
  public function saveValues($apiUrl,$apiPage,$addedValues,$anotherRequests,$connectFall) {
    session_start();
    $_SESSION['apiUrl'] = $apiUrl;
    $_SESSION['apiPage'] = $apiPage;
    $_SESSION['addedValues'] = json_encode($addedValues,true);
    $_SESSION['anotherRequests'] = $anotherRequests;
    $_SESSION['connectFall'] = $connectFall;
    return true;
  }
  
  public function getReady() {
    if ($_SESSION['apiUrl'] && $_SESSION['apiPage'] && $_SESSION['addedValues']) {
      return true;
    } else {
      exit "ApiLine di Davide Ramondetti - 500 Internal Server: error in the coding";
    }
  }
  
  public function redirect() {
    if ($_SESSION['apiUrl'] && $_SESSION['apiPage'] && $_SESSION['addedValues']) {
      header('location: '.$_SESSION['apiUrl']."/".$_SESSION['apiPage']."?".print_r(json_decode($addedValues,true)));
    } else {
      exit "ApiLine di Davide Ramondetti - 500 Internal Server: error in the coding";
    }
  }
  
  public function getError() {
    echo "ApiLine Error: Unable to load. contact the webmaster or reinstall ApiLine from <a href=\'https://github.com/d2004/APILine-php\'>Github</a>";
  }
}
