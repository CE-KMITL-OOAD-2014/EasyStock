<?php
/**
* 
*/
/**
* 
*/
class database 
{
	private $name;
	private $table;
	private $numTable=0;
	
	public function setName($name){
		$this->name=$name;
	}
	public function addTable($name){
		$table[]=$name;
		$numtable++;
	}
	public function getName(){
		return $this->name;
	}
	public function getTableName($name){
		for($i;$i<=$this->numTable;$i++){
			if($table[$i]==$name)return $table[$i];
		}
		return "";
	}
	public function getNumTable(){
		return $numTable;
	}


	/**** credit : http://www.thaicreate.com/php/php-mysql-used-function-database-query.html ****/
	/**** function connection to database ****/

	/**** function insert record ****/
	public function fncInsertRecord($strTable,$strField,$strValue){

		$strSQL = "INSERT INTO $strTable ($strField) VALUES ($strValue) ";

		return @mysql_query($strSQL);
	}

	/**** function select record ****/
	public function fncSelectRecord($strTable,$strCondition){

		$strSQL = "SELECT * FROM $strTable WHERE $strCondition ";

		$objQuery = @mysql_query($strSQL);

		return @mysql_fetch_array($objQuery);
	}

	/*** function update record ****/
	public function fncUpdateRecord($strTable,$strCommand,$strCondition){

		$strSQL = "UPDATE $strTable SET  $strCommand WHERE $strCondition ";

		return @mysql_query($strSQL);
	}

	/**** function delete record ****/
	public function fncDeleteRecord($strTable,$strCondition){

		$strSQL = "DELETE FROM $strTable WHERE $strCondition ";

		return @mysql_query($strSQL);
	}

	/**** credit : http://www.thaicreate.com/php/php-mysql-used-function-database-query.html ****/

}
?>

