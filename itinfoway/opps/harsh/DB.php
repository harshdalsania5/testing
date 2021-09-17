<?php
class DB{
	public $db;
	private $hostnam="localhost";
	private $username="root";
	private $dbname="ecom";
	private $password="";
	public function __construct(){
		try{
			$this->db=mysqli_connect($this->hostnam,$this->username,$this->password,$this->dbname);
		}catch(Exception $e) {
			echo "message: ".$e->getMessage();
		}
	}
	
	public function delet($table,$where=null){
	//delete from table where id="
		try{
			$query="delete from $table where $where";
			//print_r($query);
			mysqli_query($this->db,$query);
			return true;
			
		}catch(Exception $e){
			return false;
		}
	
	}
	public function update($table,$data,$where=null){
		try{
			$set=array();
			foreach($data as $key=>$value){
				$set[]=	"`$key`='$value'";
			}
			$query ="UPDATE $table SET ".implode(",",$set)." Where $where";
			mysqli_query($this->db,$query);
			return true;
		}catch(Exception $e){
			return false;
		}
	}
	public function insert($table,$data){
		try{
			$key=array_keys($data);
			$keys="`".implode("`,`",$key)."`";
			$val="'".implode("','",$data)."'";
			print_r($val);
			$query ="INSERT INTO ".$table."(".$keys.")VALUSE(".$val.")";
			print_r($query);
			mysqli_query($this->db,$query);
			return true;
		}catch(Exception $e){
			return false;
		}
	}
	public function view($table,$where=null)
	{
		try{
		$query="SELECT * FROM ".$table;
		if(!is_null($where)){
			$query .= " WHERE ".$where;
		}
		$a=mysqli_query($this->db,$query);
		return mysqli_fetch_all($a,MYSQLI_ASSOC);
		}
		catch(Exception $e){
			return false;
		}
	}
}
?>