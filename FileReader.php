<?php
$lines= file("info.txt");

foreach($lines as $line_num=>$line){
	
	echo "Line #<b>{$line_num}</b>:" . $line. "<br/>\n";
}


?>