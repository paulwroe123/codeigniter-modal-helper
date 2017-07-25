<?php

/*
	NOTE: This is an example function for demonstration purposes
	only. Please refer to modal_helper.php for use within
	a Codeigniter environment.
*/

function modal($path = NULL, $attributes = array()) {
	
	if (file_exists($path)) {
		
		$_attributes = '';

		foreach ($attributes as $key => $value) {

			$_attributes .= " ".$key."='".$value."' ";

		}

		$modal_content = file_get_contents($path, FALSE);

		return <<<MODAL
			<div class='modal' {$_attributes}>
				<div class='modal-content'>
					{$modal_content}
				</div>
			</div>
MODAL;

	}

	return '';

}

?>

<!DOCTYPE html>

<html>

	<head>

		<title>Example Usage</title>

		<!-- CSS -->
		<link href="css/codeigniter-modal-helper.css" type="text/css" rel="stylesheet" />

	</head>

	<body>

		<h1>Example Usage</h1>

		<p>This example page demonstrates how the Codeigniter Modal Helper can be used. It is assumed that you will be running the PHP within modal_helper.php within a Codeigniter environment. However, to demonstrate it's functionality, the PHP function has simply een extracted and inserted into this file.</p>

		<!-- Create a modal -->
		<?= modal('templateOne.html', array('id' => 'modalOne')) ?>

		<!-- Create another modal -->
		<?= modal('templateTwo.html', array('id' => 'modalTwo')) ?>

		<!-- Button one -->
		<button type="button" data-modal-id="modalOne" class="modal-btn">Open Modal 1</button>

		<!-- Button two -->
		<button type="button" data-modal-id="modalTwo" class="modal-btn">Open Modal 2</button>

		<!-- JS -->
		<script src="js/codeigniter-modal-helper.js"></script>
		<script src="js/example.js"></script>

	</body>

</html>