<?php	 	
#[\AllowDynamicProperties]
class MySql
{
	private $dbUser;
	private $dbPass;
	private $dbName;
	private $dbHost;
	private $dbConnection;
	private $errorString;
	private $filter;		
	private $util;
	public static $instance;
	public $query;
	public $newCon;
	public static $connection;
	public $lastId;
	
	function __construct()
	{
		$this->dbConnection = null;
		$this->filter = true;	
		$this->newCon = false;
	}
	
	function setNew()
	{
		$this->newCon = true;
	}
	
	function noFilter()
	{
		$this->filter = false;
	}
	
	function setError($string)
	{
		$this->errorString = $string;
	}
	
	function getError()
	{
		return $this->errorString;
	}
	
	function connect()
	{
		if(is_null($this->dbConnection)){
			if (defined('CONST_BASEDIR') && file_exists(CONST_BASEDIR.'/config.php')) {
				require(CONST_BASEDIR.'/config.php');
			} else {
				$cfgPath = dirname(dirname(__FILE__)) . '/config.php';
				if (file_exists($cfgPath)) {
					require($cfgPath);
				}
			}
			
			if (isset($config)) {
				$this->dbUser = $config["databaseUser"] ?? "";
				$this->dbPass = $config["databasePass"] ?? "";
				$this->dbName = $config["databaseName"] ?? "";
				$this->dbHost = $config["databaseHost"] ?? "localhost";
			}
			
			// In PHP 8.1+, mysqli default reporting throws exceptions. Set to OFF to match legacy handling.
			mysqli_report(MYSQLI_REPORT_OFF);

			$this->dbConnection = @mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
			if(!$this->dbConnection) {
				$this->setError(mysqli_connect_error());
				return false;
			}
		}
		return $this->dbConnection;
	}
	
	function getInstance(){
		return $this->connect();
	}
	
	function close()
	{
		if($this->dbConnection)
		{
			@mysqli_close($this->dbConnection);
			$this->dbConnection = null;
		}
	}	
	
	function fetchAll($query)
	{
		$this->connect();
		$this->query = $query;
		$fileds = array();
		$resultSet = array();
		$conn = $this->dbConnection;
		if(!$conn) {
			return $resultSet;
		}

		$result = mysqli_query($conn, $query);
		if($result)
		{
			$fieldsLength = mysqli_num_fields($result);
			$i = 0;
			while ($property = mysqli_fetch_field($result)) {
				$fileds[$i] = $property->name;
				$i++;
			}
		
			if(mysqli_num_rows($result) > 0)
			{
				$start = 0;
				while($row = mysqli_fetch_row($result))
				{
					for($j = 0; $j < $fieldsLength; $j++)
					{
						if($this->filter)
						{
							$resultSet[$start][$fileds[$j]] = $this->removeFilter($row[$j]);
						}
						else
						{
							$resultSet[$start][$fileds[$j]] = $row[$j];
						}
					}
					$start++;
				}
			}
			mysqli_free_result($result);
		}
		else
		{
			$this->setError(mysqli_error($conn));
		}
		return $resultSet;
	}
	
	function insert($options, $table)
	{
		$this->connect();
		$conn = $this->dbConnection;
		$queryString = "";
		$p = count($options);
		$start = 0;
		$fieldString = "";
		$valueString = "";
		foreach($options as $key => $val)
		{
			$fieldString .= " `{$key}`";
			$valueString .= " '{$val}' ";
			if($start < $p - 1)
			{
				$fieldString .= ",";
				$valueString .= ",";
			}
			$start++;
		}			
		$queryString = "INSERT INTO `{$table}` ({$fieldString}) VALUES ({$valueString}) ";
		$this->query = $queryString;
		if($conn) {
			$result = mysqli_query($conn, $queryString);
			if($result) {
				$this->lastId = mysqli_insert_id($conn);
			} else {
				$this->setError("Insert: " . mysqli_error($conn));
			}
		}
	}
	
	function insertMulti($fields, $values, $table)
	{
		$this->connect();
		$conn = $this->dbConnection;
		$queryString = "";
		$p = count($fields);
		$start = 0;
		$fieldString = "";
		foreach($fields as $key => $val){
			$fieldString .= " `{$val}`";				
			if($start < $p - 1){
				$fieldString .= ",";					
			}
			$start++;
		}
		
		$valueString = "";
		for($i = 0; $i < count($values); $i++){
			$p = count($values[$i]);
			$start = 0;
			$valueString .= "(";
			foreach($values[$i] as $key => $val){
				$valueString .= "'{$val}'";				
				if($start < $p - 1){
					$valueString .= ",";					
				}
				$start++;
			}
			$valueString .= ")";
			if($i < count($values) - 1){
				$valueString .= ",";
			}
		}
		$queryString = "INSERT INTO `{$table}` ({$fieldString}) VALUES {$valueString} ";
		$this->query = $queryString;
		if($conn) {
			$result = mysqli_query($conn, $queryString);
			if(!$result) {
				$this->setError(mysqli_error($conn));
			}
		}
	}
	
	function update($options, $table, $condition)
	{
		$this->connect();
		$conn = $this->dbConnection;
		$queryString = "";
		$fieldString = "";			
		$p = count($options);
		$start = 0;
		foreach($options as $key => $val){
			$fieldString .= " `{$key}`='{$val}'";
			if($start < $p - 1){
				$fieldString .= ",";
			}
			$start++;
		}			
		$queryString = "UPDATE `{$table}` SET {$fieldString} ";

		if(!empty($condition)){
			$queryString .= " WHERE {$condition} ";
		}
		$this->query = $queryString;
		if($conn) {
			$result = mysqli_query($conn, $queryString);
			if(!$result) {
				$this->setError(mysqli_error($conn));
			}
		}
	}
	
	function delete($table, $condition)
	{
		$this->connect();
		$conn = $this->dbConnection;
		$queryString = "DELETE FROM `{$table}` ";
		if(!empty($condition))
		{
			$queryString .= " WHERE {$condition} ";
		}
		$this->query = $queryString;
		if($conn) {
			$result = mysqli_query($conn, $queryString);
			if(!$result) {
				$this->setError(mysqli_error($conn));
			}
		}
	}
	
	function execute($query){
		$this->connect();
		$conn = $this->dbConnection;
		$this->query = $query;
		if($conn) {
			$result = mysqli_query($conn, $query);
			if(!$result) {
				$this->setError(mysqli_error($conn));
			}
		}
	}
	
	function lastInsertId()
	{
		if($this->dbConnection) {
			return mysqli_insert_id($this->dbConnection);
		}
		return $this->lastId ?? 0;
	}
	
	function affectedRows($instance){
		if($instance) {
			return mysqli_affected_rows($instance);
		}
		return 0;
	}
	
	function addFilter($string){
		return addslashes($string ?? '');	
	}
	
	function removeFilter($string){			
		return stripslashes($string ?? '');			
	}	
	
	function escapeHtml($text){
		return strip_tags($text ?? '');
	}
}
?>