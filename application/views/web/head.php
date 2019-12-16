<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title><?php echo 'CI Template - MySetup'; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
		if(is_array ($css_common )){
			foreach($css_common as $data){
				echo '<link href="'.$data.'"rel="stylesheet">';
			}
		}

	?>
</head>

<body>
