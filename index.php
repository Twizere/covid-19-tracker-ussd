<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];

//This is the first menu screen

if ( $text == "" ) {
  $response  = "Murakaza neza, Murabasha kubona amakuru ajyanye n'icyorezo cya korona virus mu Rwanda \n Reba umubare w'abanduye:";
  $response .= "1. Mu gihugu Hose \n";
  $response .= "2. Mu ntara urimo \n";
  $response .= "3. Mu Karere urimo \n";
  $response .= "4. Mu murenge urimo \n";
}


//echo response

header('Content-type: text/plain');
echo $response


?>