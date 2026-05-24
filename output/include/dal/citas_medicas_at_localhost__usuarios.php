<?php
$dalTableusuarios = array();
$dalTableusuarios["id_usuario"] = array("type"=>3,"varname"=>"id_usuario", "name" => "id_usuario");
$dalTableusuarios["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTableusuarios["password_hash"] = array("type"=>200,"varname"=>"password_hash", "name" => "password_hash");
$dalTableusuarios["id_medico"] = array("type"=>3,"varname"=>"id_medico", "name" => "id_medico");
$dalTableusuarios["activo"] = array("type"=>16,"varname"=>"activo", "name" => "activo");
	$dalTableusuarios["id_usuario"]["key"]=true;

$dal_info["citas_medicas_at_localhost__usuarios"] = &$dalTableusuarios;
?>