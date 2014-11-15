<?php
/**
* 
*/
class Person{

	private $user = "unidentified";
	private $password = "unidentified";
	private $product;
	private $numProduct = 0;
	
	public function setUser($user)
	{
		$this->$user=$user;
	}
	public function setPassword($password)
	{
		$this->password=$password;
	}	
	public function setNumProduct()
	{
		$this->numProduct=$numProduct;
	}
	public function getUser()
	{
		return $this->user;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function getNumProduct()
	{
		return $this->numProduct;
	}
	public function getProduct($i)
	{
		return $this->product[$i];
	}
	public function addProduct($code)
	{
		
		if($code!=""){
			$this->product[]=$code;		
			$this->numProduct=$this->numProduct+1;
		}

	}
	public function deleteProduct($n)
	{
		//$this->product[$i]="NULL";
		for ($i=$n; $i < ($this->numProduct)-1; $i++) { 
			$this->product[$i]=$this->product[$i+1];
		}
		$this->product[$this->numProduct-1]=new Product();
		$this->numProduct=$this->numProduct-1;

	}
	public function searchProductByCode($code)
	{
		for ($i=0; $i <=($this->numProduct)-1 ; $i++) { 
			if ($code==$this->product[$i]->getCode()) {
				return $i;
			}else return "There's no product";
		}

	}
	public function sellProduct($code,$amount)
	{
		$this->product[$this->searchProductByCode($code)]->sell($amount);
		

	}
}

?>

