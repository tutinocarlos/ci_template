<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title><?php echo 'CI Template - MySetup'; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
		if(is_array ($css )){
			foreach($css as $data){
				echo '<link href="'.$data.'"rel="stylesheet">';
			}
		}

	?>
</head>

<body>