<?php
/**
* 
*/

/**** credit : http://www.thaicreate.com/php/php-mysql-used-function-database-query.html ****/
/**** function connection to database ****/

//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");

//$objDB = mysql_select_db("mydatabase");


/**** function insert record ****/

function fncInsertRecord($strTable,$strField,$strValue)

{

	$strSQL = "INSERT INTO $strTable ($strField) VALUES ($strValue) ";

	return @mysql_query($strSQL);

}



/**** function select record ****/

function fncSelectRecord($strTable,$strCondition)

{

	$strSQL = "SELECT * FROM $strTable WHERE $strCondition ";

	$objQuery = @mysql_query($strSQL);

	return @mysql_fetch_array($objQuery);

}



/*** function update record ****/

function fncUpdateRecord($strTable,$strCommand,$strCondition)

{

	$strSQL = "UPDATE $strTable SET  $strCommand WHERE $strCondition ";

	return @mysql_query($strSQL);

}



/**** function delete record ****/

function fncDeleteRecord($strTable,$strCondition)

{

	$strSQL = "DELETE FROM $strTable WHERE $strCondition ";

	return @mysql_query($strSQL);

}

?>

