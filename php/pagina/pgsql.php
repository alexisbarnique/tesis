<?php
/* 
 *Conexiones a la base de datos.
 */
function conectarAd()
{
$enlace= pg_connect ("host=127.0.0.1 port=5433 dbname=verfresk user=wilson password=1234 ");
return $enlace;
}
function conectarCa()
{
$enlace= pg_connect ("host=localhost port=5433 dbname=verfresk user=tabatha password=123 ");
return $enlace;
}
function conectarMe()
{
$enlace= pg_connect ("host=localhost port=5433 dbname=verfresk user=juan password=123 ");
return $enlace;
}
function conectarCo()
{
$enlace= pg_connect ("host=localhost port=5433 dbname=verfresk user=usuario password=123 ");
return $enlace;
}
function basedatos($consulta)
{
	$rev=explode(" ",$consulta);
	if($rev[0]=='insert'||$rev[0]=='INSERT'||$rev[0]=='update'||$rev[0]=='UPDATE'||$rev[0]=="select"||$rev[0]=="SELECT"||$rev[0]=="DELETE"||$rev[0]=="delete")
	{
	$resultado=pg_query($consulta) or die ("la consulta fallo:".pg_last_error());
	}
	else
	{
	$resultado='<script> alert("SQL no permitido");</script>';
	}
	return $resultado;
}
function cerrar($enlace)
{
	pg_close($enlace);
}