<?php
namespace MVC\Models;

use MVC\Core\Model;

class TaskModel extends Model
{
	protected $title;
	protected $description;

	public function __construct()
	{
		$this->title="";
		$this->description="";
	}

	public function setTitle($title)
	{
		$this->title=$title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setDescription($description)
	{
		$this->description=$description;
	}

	public function getDescription()
	{
		return $this->description;
	}
}