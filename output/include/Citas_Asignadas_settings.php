<?php




$tdataCitas_Asignadas = array();
$tdataCitas_Asignadas[".searchableFields"] = array();
	$tdataCitas_Asignadas[".truncateText"] = true;
	$tdataCitas_Asignadas[".NumberOfChars"] = 80;
	$tdataCitas_Asignadas[".ShortName"] = "Citas_Asignadas";
	$tdataCitas_Asignadas[".OwnerID"] = "id_medico";
	$tdataCitas_Asignadas[".OriginalTable"] = "citas";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );

$tdataCitas_Asignadas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataCitas_Asignadas[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsCitas_Asignadas = array();
$fieldToolTipsCitas_Asignadas = array();
$pageTitlesCitas_Asignadas = array();
$placeHoldersCitas_Asignadas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCitas_Asignadas["Spanish"] = array();
	$fieldToolTipsCitas_Asignadas["Spanish"] = array();
	$placeHoldersCitas_Asignadas["Spanish"] = array();
	$pageTitlesCitas_Asignadas["Spanish"] = array();
	$fieldLabelsCitas_Asignadas["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsCitas_Asignadas["Spanish"]["fecha"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["fecha"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["hora"] = "Hora";
	$fieldToolTipsCitas_Asignadas["Spanish"]["hora"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["hora"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["motivo"] = "Motivo";
	$fieldToolTipsCitas_Asignadas["Spanish"]["motivo"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["motivo"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["diagnostico"] = "Diagnostico";
	$fieldToolTipsCitas_Asignadas["Spanish"]["diagnostico"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["diagnostico"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["tratamiento"] = "Tratamiento";
	$fieldToolTipsCitas_Asignadas["Spanish"]["tratamiento"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["tratamiento"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["receta"] = "Receta";
	$fieldToolTipsCitas_Asignadas["Spanish"]["receta"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["receta"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["notas"] = "Notas";
	$fieldToolTipsCitas_Asignadas["Spanish"]["notas"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["notas"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["paciente_nombre_completo"] = "Paciente Nombre Completo";
	$fieldToolTipsCitas_Asignadas["Spanish"]["paciente_nombre_completo"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["paciente_nombre_completo"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["paciente_telefono"] = "Paciente Telefono";
	$fieldToolTipsCitas_Asignadas["Spanish"]["paciente_telefono"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["paciente_telefono"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["paciente_email"] = "Paciente Email";
	$fieldToolTipsCitas_Asignadas["Spanish"]["paciente_email"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["paciente_email"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["paciente_edad"] = "Paciente Edad";
	$fieldToolTipsCitas_Asignadas["Spanish"]["paciente_edad"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["paciente_edad"] = "";
	$fieldLabelsCitas_Asignadas["Spanish"]["id_medico"] = "Id Medico";
	$fieldToolTipsCitas_Asignadas["Spanish"]["id_medico"] = "";
	$placeHoldersCitas_Asignadas["Spanish"]["id_medico"] = "";
	if (count($fieldToolTipsCitas_Asignadas["Spanish"]))
		$tdataCitas_Asignadas[".isUseToolTips"] = true;
}


	$tdataCitas_Asignadas[".NCSearch"] = true;



$tdataCitas_Asignadas[".shortTableName"] = "Citas_Asignadas";
$tdataCitas_Asignadas[".nSecOptions"] = 1;

$tdataCitas_Asignadas[".mainTableOwnerID"] = "id_medico";
$tdataCitas_Asignadas[".entityType"] = 1;

$tdataCitas_Asignadas[".strOriginalTableName"] = "citas";

	



$tdataCitas_Asignadas[".showAddInPopup"] = false;

$tdataCitas_Asignadas[".showEditInPopup"] = false;

$tdataCitas_Asignadas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCitas_Asignadas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCitas_Asignadas[".listAjax"] = false;
//	temporary
$tdataCitas_Asignadas[".listAjax"] = false;

	$tdataCitas_Asignadas[".audit"] = false;

	$tdataCitas_Asignadas[".locking"] = false;


$pages = $tdataCitas_Asignadas[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataCitas_Asignadas[".edit"] = true;
	$tdataCitas_Asignadas[".afterEditAction"] = 1;
	$tdataCitas_Asignadas[".closePopupAfterEdit"] = 1;
	$tdataCitas_Asignadas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataCitas_Asignadas[".add"] = true;
$tdataCitas_Asignadas[".afterAddAction"] = 1;
$tdataCitas_Asignadas[".closePopupAfterAdd"] = 1;
$tdataCitas_Asignadas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataCitas_Asignadas[".list"] = true;
}



$tdataCitas_Asignadas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataCitas_Asignadas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataCitas_Asignadas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataCitas_Asignadas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataCitas_Asignadas[".printFriendly"] = true;
}



$tdataCitas_Asignadas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataCitas_Asignadas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataCitas_Asignadas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataCitas_Asignadas[".isUseAjaxSuggest"] = true;

$tdataCitas_Asignadas[".rowHighlite"] = true;




$tdataCitas_Asignadas[".flexibleSearch"] = true;


$tdataCitas_Asignadas[".ajaxCodeSnippetAdded"] = false;

$tdataCitas_Asignadas[".buttonsAdded"] = false;

$tdataCitas_Asignadas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCitas_Asignadas[".isUseTimeForSearch"] = false;


$tdataCitas_Asignadas[".badgeColor"] = "6DA5C8";


$tdataCitas_Asignadas[".allSearchFields"] = array();
$tdataCitas_Asignadas[".filterFields"] = array();
$tdataCitas_Asignadas[".requiredSearchFields"] = array();

$tdataCitas_Asignadas[".googleLikeFields"] = array();
$tdataCitas_Asignadas[".googleLikeFields"][] = "id_medico";
$tdataCitas_Asignadas[".googleLikeFields"][] = "paciente_nombre_completo";
$tdataCitas_Asignadas[".googleLikeFields"][] = "paciente_telefono";
$tdataCitas_Asignadas[".googleLikeFields"][] = "paciente_email";
$tdataCitas_Asignadas[".googleLikeFields"][] = "paciente_edad";
$tdataCitas_Asignadas[".googleLikeFields"][] = "fecha";
$tdataCitas_Asignadas[".googleLikeFields"][] = "hora";
$tdataCitas_Asignadas[".googleLikeFields"][] = "motivo";
$tdataCitas_Asignadas[".googleLikeFields"][] = "diagnostico";
$tdataCitas_Asignadas[".googleLikeFields"][] = "tratamiento";
$tdataCitas_Asignadas[".googleLikeFields"][] = "receta";
$tdataCitas_Asignadas[".googleLikeFields"][] = "notas";



$tdataCitas_Asignadas[".tableType"] = "list";

$tdataCitas_Asignadas[".printerPageOrientation"] = 0;
$tdataCitas_Asignadas[".nPrinterPageScale"] = 100;

$tdataCitas_Asignadas[".nPrinterSplitRecords"] = 40;

$tdataCitas_Asignadas[".nPrinterPDFSplitRecords"] = 40;


$tdataCitas_Asignadas[".geocodingEnabled"] = false;










$tdataCitas_Asignadas[".pageSize"] = 20;

$tdataCitas_Asignadas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCitas_Asignadas[".strOrderBy"] = $tstrOrderBy;

$tdataCitas_Asignadas[".orderindexes"] = array();

$tdataCitas_Asignadas[".sqlHead"] = "SELECT c.id_medico,  CONCAT(p.nombre, ' ', p.apellido) AS paciente_nombre_completo,  p.telefono AS paciente_telefono,  p.email AS paciente_email,  TIMESTAMPDIFF(YEAR, p.fecha_nacimiento, CURDATE()) AS paciente_edad,  c.fecha,  c.hora,  c.motivo,  c.diagnostico,  c.tratamiento,  c.receta,  c.notas";
$tdataCitas_Asignadas[".sqlFrom"] = "FROM citas AS c  INNER JOIN pacientes AS p ON c.id_paciente = p.id_paciente  INNER JOIN medicos AS m ON c.id_medico = m.id_medico  INNER JOIN especialidades AS e ON m.id_especialidad = e.id_especialidad";
$tdataCitas_Asignadas[".sqlWhereExpr"] = "";
$tdataCitas_Asignadas[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataCitas_Asignadas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCitas_Asignadas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCitas_Asignadas[".arrGroupsPerPage"] = $arrGPP;

$tdataCitas_Asignadas[".highlightSearchResults"] = true;

$tableKeysCitas_Asignadas = array();
$tdataCitas_Asignadas[".Keys"] = $tableKeysCitas_Asignadas;


$tdataCitas_Asignadas[".hideMobileList"] = array();




//	id_medico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_medico";
	$fdata["GoodName"] = "id_medico";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","id_medico");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_medico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.id_medico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "medicos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_medico";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_medico";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["id_medico"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "id_medico";
//	paciente_nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paciente_nombre_completo";
	$fdata["GoodName"] = "paciente_nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","paciente_nombre_completo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "paciente_nombre_completo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(p.nombre, ' ', p.apellido)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["paciente_nombre_completo"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "paciente_nombre_completo";
//	paciente_telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "paciente_telefono";
	$fdata["GoodName"] = "paciente_telefono";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","paciente_telefono");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.telefono";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["paciente_telefono"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "paciente_telefono";
//	paciente_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "paciente_email";
	$fdata["GoodName"] = "paciente_email";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","paciente_email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["paciente_email"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "paciente_email";
//	paciente_edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "paciente_edad";
	$fdata["GoodName"] = "paciente_edad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","paciente_edad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "paciente_edad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIMESTAMPDIFF(YEAR, p.fecha_nacimiento, CURDATE())";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["paciente_edad"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "paciente_edad";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","fecha");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["fecha"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "fecha";
//	hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "hora";
	$fdata["GoodName"] = "hora";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","hora");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "hora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.hora";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["hora"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "hora";
//	motivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "motivo";
	$fdata["GoodName"] = "motivo";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","motivo");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "motivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.motivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["motivo"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "motivo";
//	diagnostico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "diagnostico";
	$fdata["GoodName"] = "diagnostico";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","diagnostico");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "diagnostico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.diagnostico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["diagnostico"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "diagnostico";
//	tratamiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tratamiento";
	$fdata["GoodName"] = "tratamiento";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","tratamiento");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "tratamiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.tratamiento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["tratamiento"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "tratamiento";
//	receta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "receta";
	$fdata["GoodName"] = "receta";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","receta");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "receta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.receta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["receta"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "receta";
//	notas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "notas";
	$fdata["GoodName"] = "notas";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("Citas_Asignadas","notas");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "notas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.notas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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

			
	
	
//end of Filters settings


	$tdataCitas_Asignadas["notas"] = $fdata;
		$tdataCitas_Asignadas[".searchableFields"][] = "notas";


$tables_data["Citas Asignadas"]=&$tdataCitas_Asignadas;
$field_labels["Citas_Asignadas"] = &$fieldLabelsCitas_Asignadas;
$fieldToolTips["Citas_Asignadas"] = &$fieldToolTipsCitas_Asignadas;
$placeHolders["Citas_Asignadas"] = &$placeHoldersCitas_Asignadas;
$page_titles["Citas_Asignadas"] = &$pageTitlesCitas_Asignadas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Citas Asignadas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Citas Asignadas"] = array();



	
				$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Citas Asignadas"][0] = $masterParams;
				$masterTablesData["Citas Asignadas"][0]["masterKeys"] = array();
	$masterTablesData["Citas Asignadas"][0]["masterKeys"][]="id_paciente";
				$masterTablesData["Citas Asignadas"][0]["detailKeys"] = array();
	$masterTablesData["Citas Asignadas"][0]["detailKeys"][]="id_paciente";
		
	
				$strOriginalDetailsTable="medicos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="medicos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "medicos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Citas Asignadas"][1] = $masterParams;
				$masterTablesData["Citas Asignadas"][1]["masterKeys"] = array();
	$masterTablesData["Citas Asignadas"][1]["masterKeys"][]="id_medico";
				$masterTablesData["Citas Asignadas"][1]["detailKeys"] = array();
	$masterTablesData["Citas Asignadas"][1]["detailKeys"][]="id_medico";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Citas_Asignadas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "c.id_medico,  CONCAT(p.nombre, ' ', p.apellido) AS paciente_nombre_completo,  p.telefono AS paciente_telefono,  p.email AS paciente_email,  TIMESTAMPDIFF(YEAR, p.fecha_nacimiento, CURDATE()) AS paciente_edad,  c.fecha,  c.hora,  c.motivo,  c.diagnostico,  c.tratamiento,  c.receta,  c.notas";
$proto0["m_strFrom"] = "FROM citas AS c  INNER JOIN pacientes AS p ON c.id_paciente = p.id_paciente  INNER JOIN medicos AS m ON c.id_medico = m.id_medico  INNER JOIN especialidades AS e ON m.id_especialidad = e.id_especialidad";
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
	"m_strName" => "id_medico",
	"m_strTable" => "c",
	"m_srcTableName" => "Citas Asignadas"
));

$proto6["m_sql"] = "c.id_medico";
$proto6["m_srcTableName"] = "Citas Asignadas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "p.nombre"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "p.apellido"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "CONCAT(p.nombre, ' ', p.apellido)";
$proto8["m_srcTableName"] = "Citas Asignadas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "paciente_nombre_completo";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "p",
	"m_srcTableName" => "Citas Asignadas"
));

$proto13["m_sql"] = "p.telefono";
$proto13["m_srcTableName"] = "Citas Asignadas";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "paciente_telefono";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "p",
	"m_srcTableName" => "Citas Asignadas"
));

$proto15["m_sql"] = "p.email";
$proto15["m_srcTableName"] = "Citas Asignadas";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "paciente_email";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "YEAR"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "p.fecha_nacimiento"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CURDATE()"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "TIMESTAMPDIFF";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "TIMESTAMPDIFF(YEAR, p.fecha_nacimiento, CURDATE())";
$proto17["m_srcTableName"] = "Citas Asignadas";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "paciente_edad";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "c",
	"m_srcTableName" => "Citas Asignadas"
));

$proto22["m_sql"] = "c.fecha";
$proto22["m_srcTableName"] = "Citas Asignadas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "hora",
	"m_strTable" => "c",
	"m_srcTableName" => "Citas Asignadas"
));

$proto24["m_sql"] = "c.hora";
$proto24["m_srcTableName"] = "Citas Asignadas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "motivo",
	"m_strTable" => "c",
	"m_srcTableName" => "Citas Asignadas"
));

$proto26["m_sql"] = "c.motivo";
$proto26["m_srcTableName"] = "Citas Asignadas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnostico",
	"m_strTable" => "c",
	"m_srcTableName" => "Citas Asignadas"
));

$proto28["m_sql"] = "c.diagnostico";
$proto28["m_srcTableName"] = "Citas Asignadas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "tratamiento",
	"m_strTable" => "c",
	"m_srcTableName" => "Citas Asignadas"
));

$proto30["m_sql"] = "c.tratamiento";
$proto30["m_srcTableName"] = "Citas Asignadas";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "receta",
	"m_strTable" => "c",
	"m_srcTableName" => "Citas Asignadas"
));

$proto32["m_sql"] = "c.receta";
$proto32["m_srcTableName"] = "Citas Asignadas";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "notas",
	"m_strTable" => "c",
	"m_srcTableName" => "Citas Asignadas"
));

$proto34["m_sql"] = "c.notas";
$proto34["m_srcTableName"] = "Citas Asignadas";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "citas";
$proto37["m_srcTableName"] = "Citas Asignadas";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id_cita";
$proto37["m_columns"][] = "id_paciente";
$proto37["m_columns"][] = "id_medico";
$proto37["m_columns"][] = "fecha";
$proto37["m_columns"][] = "hora";
$proto37["m_columns"][] = "estado";
$proto37["m_columns"][] = "motivo";
$proto37["m_columns"][] = "diagnostico";
$proto37["m_columns"][] = "tratamiento";
$proto37["m_columns"][] = "receta";
$proto37["m_columns"][] = "notas";
$proto37["m_columns"][] = "created_at";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "citas AS c";
$proto36["m_alias"] = "c";
$proto36["m_srcTableName"] = "Citas Asignadas";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "pacientes";
$proto41["m_srcTableName"] = "Citas Asignadas";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id_paciente";
$proto41["m_columns"][] = "nombre";
$proto41["m_columns"][] = "apellido";
$proto41["m_columns"][] = "fecha_nacimiento";
$proto41["m_columns"][] = "telefono";
$proto41["m_columns"][] = "email";
$proto41["m_columns"][] = "direccion";
$proto41["m_columns"][] = "activo";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "INNER JOIN pacientes AS p ON c.id_paciente = p.id_paciente";
$proto40["m_alias"] = "p";
$proto40["m_srcTableName"] = "Citas Asignadas";
$proto42=array();
$proto42["m_sql"] = "c.id_paciente = p.id_paciente";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_paciente",
	"m_strTable" => "c",
	"m_srcTableName" => "Citas Asignadas"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= p.id_paciente";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "medicos";
$proto45["m_srcTableName"] = "Citas Asignadas";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id_medico";
$proto45["m_columns"][] = "nombre";
$proto45["m_columns"][] = "apellido";
$proto45["m_columns"][] = "telefono";
$proto45["m_columns"][] = "email";
$proto45["m_columns"][] = "id_especialidad";
$proto45["m_columns"][] = "activo";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN medicos AS m ON c.id_medico = m.id_medico";
$proto44["m_alias"] = "m";
$proto44["m_srcTableName"] = "Citas Asignadas";
$proto46=array();
$proto46["m_sql"] = "c.id_medico = m.id_medico";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_medico",
	"m_strTable" => "c",
	"m_srcTableName" => "Citas Asignadas"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= m.id_medico";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_INNERJOIN";
			$proto49=array();
$proto49["m_strName"] = "especialidades";
$proto49["m_srcTableName"] = "Citas Asignadas";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id_especialidad";
$proto49["m_columns"][] = "nombre";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "INNER JOIN especialidades AS e ON m.id_especialidad = e.id_especialidad";
$proto48["m_alias"] = "e";
$proto48["m_srcTableName"] = "Citas Asignadas";
$proto50=array();
$proto50["m_sql"] = "m.id_especialidad = e.id_especialidad";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_especialidad",
	"m_strTable" => "m",
	"m_srcTableName" => "Citas Asignadas"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= e.id_especialidad";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Citas Asignadas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Citas_Asignadas = createSqlQuery_Citas_Asignadas();


	
		;

												

$tdataCitas_Asignadas[".sqlquery"] = $queryData_Citas_Asignadas;

$tableEvents["Citas Asignadas"] = new eventsBase;
$tdataCitas_Asignadas[".hasEvents"] = false;

?>