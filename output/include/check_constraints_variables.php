<?php
$strTableName="INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="INFORMATION_SCHEMA.CHECK_CONSTRAINTS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("INFORMATION_SCHEMA.CHECK_CONSTRAINTS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["INFORMATION_SCHEMA.CHECK_CONSTRAINTS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>