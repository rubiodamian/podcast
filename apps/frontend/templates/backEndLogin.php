<?php
	function getBackEndLoginURL(){
		if (in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1')))
		{
			return "http://localhost/entrega3/web/backend.php/";
		}else
		{
			return "https://grupo93.proyecto2011.linti.unlp.edu.ar/alumno/entrega3/web/backend.php";
		}
	}
	