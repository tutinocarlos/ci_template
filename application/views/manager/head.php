<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title><?php echo 'Manager - CI Template - MySetup'; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	
	
<!--	css globales-->
<?php
	if(is_array ($css_common )){
		foreach($css_common as $data){
			echo '<link href="'.$data.'"rel="stylesheet" type="text/css">';
		}
	}
?>
	
<!--	js globales-->
<?php
	if(is_array ($script_common )){
		foreach($script_common as $data){
			echo '<script src="'.$data.'"></script>';
		}
	}
?>
</head>

	<body>
