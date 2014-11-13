<?php
/**
* 
*/
class Database{

	private $name = "unidentified";
	
	
	
	public function setName($name)
	{
		$this->$name=$name;
	}
	public function getName()
	{
		return $this->name;
	}
	
	public function insert($code)
	{
		fncInsertRecord($strTable,$strField,$strValue)
	}

	}
	public function update($n)
	{
		//$this->product[$i]="NULL";
		for ($i=$n; $i < ($this->numProduct)-1; $i++) { 
			$this->product[$i]=$this->product[$i+1];
		}
		$this->product[$this->numProduct-1]=new Product();
		$this->numProduct=$this->numProduct-1;

	}
	public function select($code)
	{
		for ($i=0; $i <=($this->numProduct)-1 ; $i++) { 
			if ($code==$this->product[$i]->getCode()) {
				return $i;
			}else return "There's no product";
		}

	}
	
}
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

