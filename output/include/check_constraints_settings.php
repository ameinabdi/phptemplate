<?php



$tdatacheck_constraints = array();
$tdatacheck_constraints[".searchableFields"] = array();
$tdatacheck_constraints[".ShortName"] = "check_constraints";
$tdatacheck_constraints[".OwnerID"] = "";
$tdatacheck_constraints[".OriginalTable"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";


$tdatacheck_constraints[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacheck_constraints[".originalPagesByType"] = $tdatacheck_constraints[".pagesByType"];
$tdatacheck_constraints[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacheck_constraints[".originalPages"] = $tdatacheck_constraints[".pages"];
$tdatacheck_constraints[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacheck_constraints[".originalDefaultPages"] = $tdatacheck_constraints[".defaultPages"];

//	field labels
$fieldLabelscheck_constraints = array();
$fieldToolTipscheck_constraints = array();
$pageTitlescheck_constraints = array();
$placeHolderscheck_constraints = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscheck_constraints["English"] = array();
	$fieldToolTipscheck_constraints["English"] = array();
	$placeHolderscheck_constraints["English"] = array();
	$pageTitlescheck_constraints["English"] = array();
	$fieldLabelscheck_constraints["English"]["CONSTRAINT_CATALOG"] = "CONSTRAINT CATALOG";
	$fieldToolTipscheck_constraints["English"]["CONSTRAINT_CATALOG"] = "";
	$placeHolderscheck_constraints["English"]["CONSTRAINT_CATALOG"] = "";
	$fieldLabelscheck_constraints["English"]["CONSTRAINT_SCHEMA"] = "CONSTRAINT SCHEMA";
	$fieldToolTipscheck_constraints["English"]["CONSTRAINT_SCHEMA"] = "";
	$placeHolderscheck_constraints["English"]["CONSTRAINT_SCHEMA"] = "";
	$fieldLabelscheck_constraints["English"]["CONSTRAINT_NAME"] = "CONSTRAINT NAME";
	$fieldToolTipscheck_constraints["English"]["CONSTRAINT_NAME"] = "";
	$placeHolderscheck_constraints["English"]["CONSTRAINT_NAME"] = "";
	$fieldLabelscheck_constraints["English"]["CHECK_CLAUSE"] = "CHECK CLAUSE";
	$fieldToolTipscheck_constraints["English"]["CHECK_CLAUSE"] = "";
	$placeHolderscheck_constraints["English"]["CHECK_CLAUSE"] = "";
	if (count($fieldToolTipscheck_constraints["English"]))
		$tdatacheck_constraints[".isUseToolTips"] = true;
}


	$tdatacheck_constraints[".NCSearch"] = true;



$tdatacheck_constraints[".shortTableName"] = "check_constraints";
$tdatacheck_constraints[".nSecOptions"] = 0;

$tdatacheck_constraints[".mainTableOwnerID"] = "";
$tdatacheck_constraints[".entityType"] = 0;

$tdatacheck_constraints[".strOriginalTableName"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";

	



$tdatacheck_constraints[".showAddInPopup"] = false;

$tdatacheck_constraints[".showEditInPopup"] = false;

$tdatacheck_constraints[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacheck_constraints[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacheck_constraints[".listAjax"] = false;
//	temporary
$tdatacheck_constraints[".listAjax"] = false;

	$tdatacheck_constraints[".audit"] = false;

	$tdatacheck_constraints[".locking"] = false;


$pages = $tdatacheck_constraints[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacheck_constraints[".edit"] = true;
	$tdatacheck_constraints[".afterEditAction"] = 1;
	$tdatacheck_constraints[".closePopupAfterEdit"] = 1;
	$tdatacheck_constraints[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacheck_constraints[".add"] = true;
$tdatacheck_constraints[".afterAddAction"] = 1;
$tdatacheck_constraints[".closePopupAfterAdd"] = 1;
$tdatacheck_constraints[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacheck_constraints[".list"] = true;
}



$tdatacheck_constraints[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacheck_constraints[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacheck_constraints[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacheck_constraints[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacheck_constraints[".printFriendly"] = true;
}



$tdatacheck_constraints[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacheck_constraints[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacheck_constraints[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacheck_constraints[".isUseAjaxSuggest"] = true;

$tdatacheck_constraints[".rowHighlite"] = true;





$tdatacheck_constraints[".ajaxCodeSnippetAdded"] = false;

$tdatacheck_constraints[".buttonsAdded"] = false;

$tdatacheck_constraints[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacheck_constraints[".isUseTimeForSearch"] = false;


$tdatacheck_constraints[".badgeColor"] = "7B68EE";


$tdatacheck_constraints[".allSearchFields"] = array();
$tdatacheck_constraints[".filterFields"] = array();
$tdatacheck_constraints[".requiredSearchFields"] = array();

$tdatacheck_constraints[".googleLikeFields"] = array();
$tdatacheck_constraints[".googleLikeFields"][] = "CONSTRAINT_CATALOG";
$tdatacheck_constraints[".googleLikeFields"][] = "CONSTRAINT_SCHEMA";
$tdatacheck_constraints[".googleLikeFields"][] = "CONSTRAINT_NAME";
$tdatacheck_constraints[".googleLikeFields"][] = "CHECK_CLAUSE";



$tdatacheck_constraints[".tableType"] = "list";

$tdatacheck_constraints[".printerPageOrientation"] = 0;
$tdatacheck_constraints[".nPrinterPageScale"] = 100;

$tdatacheck_constraints[".nPrinterSplitRecords"] = 40;

$tdatacheck_constraints[".geocodingEnabled"] = false;










$tdatacheck_constraints[".pageSize"] = 20;

$tdatacheck_constraints[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacheck_constraints[".strOrderBy"] = $tstrOrderBy;

$tdatacheck_constraints[".orderindexes"] = array();

$tdatacheck_constraints[".sqlHead"] = "SELECT CONSTRAINT_CATALOG,  	CONSTRAINT_SCHEMA,  	CONSTRAINT_NAME,  	CHECK_CLAUSE";
$tdatacheck_constraints[".sqlFrom"] = "FROM INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$tdatacheck_constraints[".sqlWhereExpr"] = "";
$tdatacheck_constraints[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacheck_constraints[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacheck_constraints[".arrGroupsPerPage"] = $arrGPP;

$tdatacheck_constraints[".highlightSearchResults"] = true;

$tableKeyscheck_constraints = array();
$tdatacheck_constraints[".Keys"] = $tableKeyscheck_constraints;


$tdatacheck_constraints[".hideMobileList"] = array();




//	CONSTRAINT_CATALOG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CONSTRAINT_CATALOG";
	$fdata["GoodName"] = "CONSTRAINT_CATALOG";
	$fdata["ownerTable"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
	$fdata["Label"] = GetFieldLabel("INFORMATION_SCHEMA_CHECK_CONSTRAINTS","CONSTRAINT_CATALOG");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "CONSTRAINT_CATALOG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONSTRAINT_CATALOG";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=128";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacheck_constraints["CONSTRAINT_CATALOG"] = $fdata;
		$tdatacheck_constraints[".searchableFields"][] = "CONSTRAINT_CATALOG";
//	CONSTRAINT_SCHEMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CONSTRAINT_SCHEMA";
	$fdata["GoodName"] = "CONSTRAINT_SCHEMA";
	$fdata["ownerTable"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
	$fdata["Label"] = GetFieldLabel("INFORMATION_SCHEMA_CHECK_CONSTRAINTS","CONSTRAINT_SCHEMA");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "CONSTRAINT_SCHEMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONSTRAINT_SCHEMA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=128";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacheck_constraints["CONSTRAINT_SCHEMA"] = $fdata;
		$tdatacheck_constraints[".searchableFields"][] = "CONSTRAINT_SCHEMA";
//	CONSTRAINT_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CONSTRAINT_NAME";
	$fdata["GoodName"] = "CONSTRAINT_NAME";
	$fdata["ownerTable"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
	$fdata["Label"] = GetFieldLabel("INFORMATION_SCHEMA_CHECK_CONSTRAINTS","CONSTRAINT_NAME");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "CONSTRAINT_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONSTRAINT_NAME";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=128";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacheck_constraints["CONSTRAINT_NAME"] = $fdata;
		$tdatacheck_constraints[".searchableFields"][] = "CONSTRAINT_NAME";
//	CHECK_CLAUSE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CHECK_CLAUSE";
	$fdata["GoodName"] = "CHECK_CLAUSE";
	$fdata["ownerTable"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
	$fdata["Label"] = GetFieldLabel("INFORMATION_SCHEMA_CHECK_CONSTRAINTS","CHECK_CLAUSE");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "CHECK_CLAUSE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECK_CLAUSE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=4000";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacheck_constraints["CHECK_CLAUSE"] = $fdata;
		$tdatacheck_constraints[".searchableFields"][] = "CHECK_CLAUSE";


$tables_data["INFORMATION_SCHEMA.CHECK_CONSTRAINTS"]=&$tdatacheck_constraints;
$field_labels["INFORMATION_SCHEMA_CHECK_CONSTRAINTS"] = &$fieldLabelscheck_constraints;
$fieldToolTips["INFORMATION_SCHEMA_CHECK_CONSTRAINTS"] = &$fieldToolTipscheck_constraints;
$placeHolders["INFORMATION_SCHEMA_CHECK_CONSTRAINTS"] = &$placeHolderscheck_constraints;
$page_titles["INFORMATION_SCHEMA_CHECK_CONSTRAINTS"] = &$pageTitlescheck_constraints;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["INFORMATION_SCHEMA.CHECK_CONSTRAINTS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["INFORMATION_SCHEMA.CHECK_CONSTRAINTS"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_check_constraints()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CONSTRAINT_CATALOG,  	CONSTRAINT_SCHEMA,  	CONSTRAINT_NAME,  	CHECK_CLAUSE";
$proto0["m_strFrom"] = "FROM INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "CONSTRAINT_CATALOG",
	"m_strTable" => "INFORMATION_SCHEMA.CHECK_CONSTRAINTS",
	"m_srcTableName" => "INFORMATION_SCHEMA.CHECK_CONSTRAINTS"
));

$proto6["m_sql"] = "CONSTRAINT_CATALOG";
$proto6["m_srcTableName"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CONSTRAINT_SCHEMA",
	"m_strTable" => "INFORMATION_SCHEMA.CHECK_CONSTRAINTS",
	"m_srcTableName" => "INFORMATION_SCHEMA.CHECK_CONSTRAINTS"
));

$proto8["m_sql"] = "CONSTRAINT_SCHEMA";
$proto8["m_srcTableName"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CONSTRAINT_NAME",
	"m_strTable" => "INFORMATION_SCHEMA.CHECK_CONSTRAINTS",
	"m_srcTableName" => "INFORMATION_SCHEMA.CHECK_CONSTRAINTS"
));

$proto10["m_sql"] = "CONSTRAINT_NAME";
$proto10["m_srcTableName"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECK_CLAUSE",
	"m_strTable" => "INFORMATION_SCHEMA.CHECK_CONSTRAINTS",
	"m_srcTableName" => "INFORMATION_SCHEMA.CHECK_CONSTRAINTS"
));

$proto12["m_sql"] = "CHECK_CLAUSE";
$proto12["m_srcTableName"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$proto15["m_srcTableName"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "CONSTRAINT_CATALOG";
$proto15["m_columns"][] = "CONSTRAINT_SCHEMA";
$proto15["m_columns"][] = "CONSTRAINT_NAME";
$proto15["m_columns"][] = "CHECK_CLAUSE";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "INFORMATION_SCHEMA.CHECK_CONSTRAINTS";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="INFORMATION_SCHEMA.CHECK_CONSTRAINTS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_check_constraints = createSqlQuery_check_constraints();


	
		;

				

$tdatacheck_constraints[".sqlquery"] = $queryData_check_constraints;

$tableEvents["INFORMATION_SCHEMA.CHECK_CONSTRAINTS"] = new eventsBase;
$tdatacheck_constraints[".hasEvents"] = false;

?>