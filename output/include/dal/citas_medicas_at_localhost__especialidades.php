<?php
$dalTableespecialidades = array();
$dalTableespecialidades["id_especialidad"] = array("type"=>3,"varname"=>"id_especialidad", "name" => "id_especialidad");
$dalTableespecialidades["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
	$dalTableespecialidades["id_especialidad"]["key"]=true;

$dal_info["citas_medicas_at_localhost__especialidades"] = &$dalTableespecialidades;
?>