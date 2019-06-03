<?php
namespace MVC\Core;

class Model
{
	// public function setId($id)
	// {
	// 	$this->id = $id;
	// }

	// public function getId()
	// {
	// 	return $this->id;
	// }

	public function getProperties()
	{
		$arr = get_object_vars($this);
		$str = "";
		foreach ($arr as $key => $value) {
			$str .= $key .", ";
		}
		return $str;
	}

	public function getValue()
	{
		$arr = get_object_vars($this);
		$str = "";
		foreach ($arr as $key => $value) {
			$str .= "'" . $value . "', ";
		}
		return $str;
	}

	public function update()
	{
		$arr = get_object_vars($this);
		$str ="";
		foreach ($arr as $key => $value) {
			$str .= $key ."= '" .$value ."', ";
		}
		return $str;
	}
}