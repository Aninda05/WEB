<?php
	$a= array(1,2,3,4,5);
	$b= array(6,7,8,9,10);
	//$s= array(0,0,0,0,0);
	for ($i=0;$i<5;$i++){
		$s[$i]=$a[$i]+$b[$i];
	}
	print_r($s);
?>