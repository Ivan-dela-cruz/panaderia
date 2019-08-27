<?php

	$mysqli= new mysqli("remotemysql.com", "TpETjjYWyg", "WJ8PC0T1Z1", "TpETjjYWyg");
	if(mysqli_connect_errno()){
		echo "<p>Este sitio esta presentando problemas</p>";
	}
	$mysqli->set_charset("utf8");
