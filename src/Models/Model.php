<?php

namespace Src\Models;

class Model
{
    protected $id;
    
	/**
	 * Get the value of id
	 *
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @param   mixed  $id  
	 * @return  self
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}
}