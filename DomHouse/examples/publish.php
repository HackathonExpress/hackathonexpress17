<?php

require("../phpMQTT.php");

	
$mqtt = new phpMQTT("test.mosquitto.org", 1883, "phpMQTT Pub Example"); //Change client name to something unique

if ($mqtt->connect()) {
	$mqtt->publish("hx/door/close","Hello World! at ".date("r"),0);
	$mqtt->close();
}

?>
