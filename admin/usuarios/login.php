<?php
	$email=$_POST['email'];
	$clave=md5($_POST['clave']);
	$query="SELECT * FROM usuario WHERE Email='$email' AND Clave='$clave'";
	$consulta2=$mysqli->query($query);
	if($consulta2->num_rows>=1){
		$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
		session_start();
		$_SESSION['user']=$fila['Nombre'];
        $_SESSION['user_id']=$fila['id'];
		$_SESSION['verificar']=true;
		header("Location: index.php");
	}else{
		echo "Los datos son incorrectos";
	}