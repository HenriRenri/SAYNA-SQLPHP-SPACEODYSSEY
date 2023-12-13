<?php

	class Initialisation 
	{
		public static function loadView($page)
		{
			include "Views/".$page.".php" ;
		}

		public static function loadCSS($css)
		{
			for($i = 0; $i < count($css); $i++)
			{
				echo "<link rel='stylesheet' href='".BASE_URL."Publics/css/".$css[$i].".css'>" ;
			}
		}

		public static function loadJS($js)
		{
			for($i = 0; $i < count($js); $i++)
			{
				echo "<script src='".BASE_URL."Publics/js/".$js[$i].".js'></script>" ;
			} 
		}
	}