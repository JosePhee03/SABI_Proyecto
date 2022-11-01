<?php

session_start();
UNSET($_SESSION['usuario']);
session_destroy();

echo '
	<script>
		alert("La sesión ha sido cerrada correctamente");
		window.location = "#";
	</script>
	';

?>