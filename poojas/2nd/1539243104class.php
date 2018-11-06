<?php 
	if(!class_exists('tv')){
		class tv{
			var $color = "RGB";
			var $channel = ["sony","dd tv"];
			const sound ="dolby";
			function showChanle(){
				echo "hello";
			}
		}
	}
 
	$remote = new tv;
	echo "<pre>";
	print_r($remote);
	echo "</pre>";

 echo $remote->color; 
 echo $remote->channel[0];
 echo $remote->channel[1];
 $remote->showChanle();


 echo tv ::sound;

 ?>