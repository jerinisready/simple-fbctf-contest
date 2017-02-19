<?php


	function encr($text){
		$i=0;
		$add=1;
		while($i < strlen($text) ){
		$text[$i] = chr( ord($text[$i]) + 3*$add);
		$add++;
		$i++;
		}

		return $text;
	}
	
	
	
	echo "<br>1111        : ".encr('1111');
	echo "<br>1234        : ".encr('1234');
	echo "<br>abcdefg     : ".encr('abcdefg');
	echo "<br>Ax34VRsd    : ".encr('Ax34VRsd');
	echo "<br>ACef234DVR  : ".encr('ACef234DVR');