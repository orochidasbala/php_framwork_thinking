<?php

class QueryBuilder
{
	protected $pdo;
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$statment = $this->pdo->prepare("select * from $table");
		$statment->execute();
		return $statment->fetchAll(PDO::FETCH_OBJ);
	}

	public function insert($dataArr, $table) {

		$keys = array_keys($dataArr);
		$cols = implode(",", $keys);
		$ques = "";
		foreach($keys as $key) {
			$ques .= "?,";
		}
		$ques = rtrim($ques, ",");
		$values = array_values($dataArr);
		$query = "insert into $table ($cols) values ($ques)";
		$statment = $this->pdo->prepare($query);
		$statment->execute($values);
	}
}
