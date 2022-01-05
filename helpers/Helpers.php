<?php

// Retorna la URL del proyecto
function base_url() {
	return BASE_URL;
}
// Retorna la URL de Public
function media() {
	return BASE_URL.'public';
}
// Header
function headerMain($data="") {
	$headermain = 'views/layouts/headermain.php';
	require_once $headermain;
}
function headerAdmin($data="") {
	$headeradmin = 'views/layouts/headeradmin.php';
	require_once $headeradmin;
}
// Footer
function footerMain($data="") {
	$footermain = 'views/layouts/footermain.php';
	require_once $footermain;
}
function footerAdmin($data="") {
	$footeradmin = 'views/layouts/footeradmin.php';
	require_once $footeradmin;
}
// Muestra Información Formateana
function dep($data) {
	$format = print_r('<pre>');
	$format .= print_r($data);
	$format .= print_r('</pre>');
	return $format;
}
// Eliminar exceso de espacios entre palabras
function strClean($strCadena) {
	$string = preg_replace(['/\s+/','/^\s/+|\sS'],['',''],$strCadena);
	$string = trim($string); //Elimina espacios en blanco al inicio y al final
	$string = stripslashes($string); //Elimina las \ invertidas
	$string = str_ireplace("<script>","",$string);
	$string = str_ireplace("</script>","",$string);
	$string = str_ireplace("<script src>","",$string);
	$string = str_ireplace("</script type=>","",$string);
	$string = str_ireplace("SELECT * FROM","",$string);
	$string = str_ireplace("DELETE FROM","",$string);
	$string = str_ireplace("INSERT INTO","",$string);
	$string = str_ireplace("SELECT COUNT(*) FROM","",$string);
	$string = str_ireplace("DROP TABLE","",$string);
	$string = str_ireplace("OR '1'='1","",$string);
	$string = str_ireplace('OR "1"="1"',"",$string);
	$string = str_ireplace('OR ´1´=´1´',"",$string);
	$string = str_ireplace("is NULL; -=","",$string);
	$string = str_ireplace("is NULL; --","",$string);
	$string = str_ireplace('DROP TABLE',"",$string);
	$string = str_ireplace("LIKE '","",$string);
	$string = str_ireplace('LIKE "',"",$string);
	$string = str_ireplace("LIKE ´","",$string);
	$string = str_ireplace("OR 'a'='a","",$string);
	$string = str_ireplace('OR "a"="a',"",$string);
	$string = str_ireplace("OR ´a´=´a","",$string);
	$string = str_ireplace("--","",$string);
	$string = str_ireplace("^","",$string);
	$string = str_ireplace("[","",$string);
	$string = str_ireplace("]","",$string);
	$string = str_ireplace("==","",$string);
	return $string;
}
// Genera una contraseña de 10 caracteres
function passGenerator($length=10) {
	$pass = "";
	$longitudPass = $length;
	$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	$longitudCadena = strlen($cadena);
	for($i=1; $i<=$longitudPass; $i++) {
		$pos = rand(0,$longitudCadena-1);
		$pass .= substr($cadena,$pos,1);
	}
	return $pass;
}
// Genera un token
function token() {
	$r1 = bin2hex(random_bytes(10));
	$r2 = bin2hex(random_bytes(10));
	$r3 = bin2hex(random_bytes(10));
	$r4 = bin2hex(random_bytes(10));
	$token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
	return $token;
}
// Formato para valores monetarios
function formatMoney($cantidad) {
	$cantidad = number_format($cantidad,2,SPD,SPM);
	return $cantidad;
}