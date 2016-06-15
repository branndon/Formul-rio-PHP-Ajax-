<?php

	$userID		= strip_tags( trim( $_POST[ 'id' ] ) );
	$retorno	= "";

	if ($userID != '') {

		// Connect to DB
		include 'mysql-connect.php';

		// sql to delete a record
		$sql = "DELETE FROM usuarios WHERE id=$userID";

		if (mysqli_query($conn, $sql)) {
			$retorno = "success";
			echo $retorno;
		} else {
			$retorno = "error";
			echo $retorno;
		}

		// close connect
		$conn->close();

	} else {
		echo '<script> alert( "Você não tem acesso a este diretório/arquivo." ); history.go( -1 ); </script>';
	}

?>