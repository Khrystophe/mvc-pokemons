<?php

namespace Src\Models;

use PDO;
use Src\Utils\Database;

class Type extends Model
{
    private $name;
    private $color;

	public function findAll()
    {
        $sql = 'SELECT * FROM `type` ORDER BY `name`';
        $pdo = Database::getPDO();
        $stmt = $pdo->query($sql);
        $types = $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $types;
    }

	public function findById($id)
	{
		$sql = 'SELECT * FROM `type` WHERE `id` = ' . $id;
        $pdo = Database::getPDO();
        $stmt = $pdo->query($sql);
        $type = $stmt->fetchObject(__CLASS__);
        return $type;
	}

	public function findByPokemon($pokemonNumber)
	{
		$sql = '
			SELECT
			type.id,
			type.name,
			type.color
			FROM `type`
			INNER JOIN `pokemon_type`
			ON `pokemon_number` = ' . $pokemonNumber . ' WHERE `type_id` = type.id';
        $pdo = Database::getPDO();
        $stmt = $pdo->query($sql);
        $types = $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $types;
	}

	/**
	 * Get the value of name
	 *
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set the value of name
	 *
	 * @param   mixed  $name  
	 * @return  self
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get the value of color
	 *
	 * @return mixed
	 */
	public function getColor()
	{
		return $this->color;
	}

	/**
	 * Set the value of color
	 *
	 * @param   mixed  $color  
	 * @return  self
	 */
	public function setColor($color)
	{
		$this->color = $color;

		return $this;
	}
}