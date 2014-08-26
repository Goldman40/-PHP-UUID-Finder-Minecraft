<?php
function getUuid ($pseudo)
{

	$json = file_get_contents('https://api.mojang.com/users/profiles/minecraft/'.$pseudo.'');

		var_dump(json_decode($json));

	$parsed_json = json_decode($json);
	$uuid = $parsed_json->{'id'};

return ($uuid);
}

?>
