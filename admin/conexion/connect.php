<?php

	$mysqli= new mysqli("sql103.tonohost.com", "ottos_24382311", "ROOT1234", "ottos_24382311_bd_panaderia");
	if(mysqli_connect_errno()){
		echo "<p>Este sitio esta presentando problemas</p>";
	}
	$mysqli->set_charset("utf8");
