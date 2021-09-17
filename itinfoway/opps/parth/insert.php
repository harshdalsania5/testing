<?php
class insert
{
	public $conn;
	private $hostname="localhost";
	private $username="root";
	private $password="";
	private $databasename="opps";
	public function __construct()
	{
		try{
			$this->conn=mysqli_connect($this->hostname,$this->username,$this->password,$this->databasename);
		}
		catch(Exception $e)
		{
			echo "message: ".$e->getMessage();
		}
	}
	public function datainsert($tablename,$data){
			//insert into tablename() values ();
			$key=array_keys($data);
			$keys="`".implode("`,`",$key)."`";
			//print_r($keys);
			$value="'".implode("','",$data)."'";
			//print_r($value);
			$query="INSERT INTO ";
			$query.=$tablename;
			$query.="(".$keys.")";
			$query.="VALUES";
			$query.="(".$value.")";
			
			mysqli_query($this->conn,$query);
			print_r($query);
			return true;
	}
}
$obj=new insert();
print_r($_POST);
$_POST['hobbies']=json_encode($_POST['hobbies']);
unset($_POST['save']);
$data=$obj->datainsert("users",$_POST);
if($data)
{
	echo "record inseeted succesfuuly";
}
else
{
	echo "error";
}
?>