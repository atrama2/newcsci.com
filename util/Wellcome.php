<?php

class Wellcome
{
	public static function checkWellcome()
	{
		$haveWellcome = TRUE;
		if ($haveWellcome == FALSE){
			header( "location: index" );
		}
		else {
			echo "test";
		}
	}
}

?>