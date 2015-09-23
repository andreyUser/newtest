<!DOCTYPE HTML>
<html>
	<head>
		<body>
			<?php
			class JsonFluent {

			 /*var $a = array ('first'=>"apple",'second'=>"banana","third"=>array('sub1'=>1,'sub2'=>2,'sub3'=>3));*/
			 var $json;

			 function JsonFluent($json) {
			 	$this->json = is_string($json) ? json_decode($json, true) : $json;
			 }

			 function get($k) {
			 	$entity = $this->json[$k];
			 	return is_array($entity) ? new JsonFluent($entity) : $entity;
		
			 }
			}

			$o = new JsonFluent('{"first":"apple","second":"banana","third":{"sub1":1,"sub2":2,"sub3":3}}');
			echo $o->get('first');
			echo $o->get('third')->get('sub2');
			
			
			?>

		</body>
	</head>
</html>	