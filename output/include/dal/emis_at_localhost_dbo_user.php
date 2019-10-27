<?php
$dalTableuser = array();
$dalTableuser["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableuser["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTableuser["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTableuser["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableuser["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableuser["birthday"] = array("type"=>200,"varname"=>"birthday", "name" => "birthday");
	$dalTableuser["id"]["key"]=true;

$dal_info["emis_at_localhost_dbo_user"] = &$dalTableuser;
?>