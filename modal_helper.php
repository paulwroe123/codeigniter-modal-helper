<?php

/*
	Modal Helper
	Example Usage: <?= modal('modal.php', array('data-modal'=>'myModal')) ?>
*/

if (!defined('BASEPATH'))exit('No direct script access allowed');

if (!function_exists('modal')) { 

	function modal($path = NULL, $attributes = array()) {

		$contentPath = APPPATH.'views/'.$path;
		
		if (file_exists($contentPath)) {
			
			$_attributes = '';

			foreach ($attributes as $key => $value) {

				$_attributes .= " ".$key."='".$value."' ";

			}

			$modal_content = file_get_contents($contentPath, FALSE);

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

}