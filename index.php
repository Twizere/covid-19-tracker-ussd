<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];

//This is the first menu screen
if ( $text == "" ) {
  $response  = "CON Murakaza neza, Murabasha kubona amakuru ajyanye n'icyorezo cya korona virus mu Rwanda \n Reba umubare w'abanduye: \n";
  $response .= "1. Mu gihugu hose \n";
  $response .= "2. Mu ntara urimo \n";
  $response .= "3. Mu Karere urimo \n";
  $response .= "4. Mu murenge urimo \n";
}

else if ($text == "1") {
  $response  = "CON Kuwa 28 Werurwe 2020 saa 18:21\n Mugihugu hose hamaze kwandura abantu 50\n\n";
  $response .= "1.Mu ntara urimo\n";
  $response .= "2.Mu zindi ntara\n";
  $response .= "\n0.Ahabanza\n";
}

//Ending the Respose/Session
else{
  $response .= "END Murakoze";
}


//echo response

header('Content-type: text/plain');
echo $response


?>