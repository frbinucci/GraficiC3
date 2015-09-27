<?php

$timeStamp = 1441387740;

echo "date,frequenza,datoProva"."\n";

for($i=1; $i<=50; $i++)
{
	echo date("Y-m-d H:i:s", $timeStamp).",".rand().",".rand()."\n";
	$timeStamp = $timeStamp + 3600;
}

?>