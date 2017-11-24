<?

function visitas($con) {
	// Tiempo que se guardará la cookie (Por defecto 10 minutos)
	$minutos = 10;
	// ------------------
	$laFecha = getdate();
	$mesActual = $laFecha["mon"];
	$anioActual = $laFecha["year"];
	$resultadoSQL = mysql_query("SELECT * from estadisticas WHERE mes=$mesActual AND anio=$anioActual",$con);
	if(mysql_num_rows($resultadoSQL) == 0) {
		$actualizacion = mysql_query("INSERT INTO estadisticas (mes, anio, visitas) VALUES ($mesActual, $anioActual, 0)",$con);
	}
	$resultadoSQL = mysql_query("SELECT SUM(visitas) from estadisticas",$con);
	$datosStats = mysql_fetch_row($resultadoSQL);
	$total = $datosStats[0];
	$resultadoSQL = mysql_query("SELECT * from estadisticas",$con);
	$datosMensual = mysql_fetch_row($resultadoSQL);
	$elMes = $datosMensual[0];
	$elAnio = $datosMensual[1];
	$visitasDelMes = $datosMensual[2];
	$visitante = $_COOKIE['misVisitas'];
	if(!isset($visitante)) {
	  setcookie("misVisitas","visitante",time()+(60*$minutos),"/");
	  if($mesActual!=$elMes) {
	  	$delMes=0;
	  }
	  $total++;
	  $visitasDelMes++;
	  $actualización = mysql_query("UPDATE estadisticas set visitas=$visitasDelMes WHERE mes=$mesActual AND anio=$anioActual",$con);
	}
	$resultadoVisitas[0] = $total; //Total de visitas en la página
	$resultadoVisitas[1] = $visitasDelMes; //Visitas totales del Mes actual
	return $resultadoVisitas;
}

?>