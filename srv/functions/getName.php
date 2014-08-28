<?php
function getName ($uuid)
{

	$json = file_get_contents('https://sessionserver.mojang.com/session/minecraft/profile/'.$uuid.'');

		(json_decode($json));

	$parsed_json = json_decode($json);
	$name = $parsed_json->{'name'};

echo $name;
}

?>
