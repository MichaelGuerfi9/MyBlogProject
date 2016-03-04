<?php
	function getBdd(){
		global $bdd;
	    $bdd = new PDO('mysql:host=localhost;dbname=pokemaniac', 'root','root');
	    return $bdd;
	}