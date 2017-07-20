<?php

/*
	Modal Helper
	Example Usage: <?= modal('modal.php', array('data-modal'=>'myModal')) ?>
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('modal')) { 

	function modal($path = NULL, $attributes = array()) {
		
		$modal = '';

		$contentPath = APPPATH.'views/'.$path;
		
		if (file_exists($contentPath)) {
			
			$modal = '<div class="modal"';
			
			foreach ($attributes as $key => $value) {

				$modal .= " ".$key."='".$value."' ";

			}

			$modal .= '>';

			$modal .= file_get_contents($contentPath, FALSE);

			$modal .= '</div>';

			return $modal;

		}

		return '';

	}

}