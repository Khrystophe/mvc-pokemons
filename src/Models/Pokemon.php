<?php

namespace Src\Models;

use PDO;
use Src\Utils\Database;

class Pokemon extends Model
{
    private $name;
    private $hp;
    private $attack;
    private $defense;
    private $spe_attack;
    private $spe_defense;
    private $speed;
    private $number;

    public function findAll()
    {
        $sql = 'SELECT * FROM pokemon ORDER BY number';
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare($sql);
		$stmt->execute();
        $pokemons = $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $pokemons;
    }

	public function findById($id)
	{
		$sql = 'SELECT * FROM pokemon WHERE id = :id';
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
        $pokemon = $stmt->fetchObject(__CLASS__);
        return $pokemon;
	}

	public function findAllByType($typeId)
	{
		$sql = '
			SELECT
			pokemon.id,
			pokemon.name,
			pokemon.hp,
			pokemon.attack,
			pokemon.defense,
			pokemon.spe_attack,
			pokemon.spe_defense,
			pokemon.speed,
			pokemon.number
			FROM pokemon
			INNER JOIN pokemon_type
			ON number = pokemon_number
			WHERE type_id = :typeId ORDER BY number
		';
		$pdo = Database::getPDO();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':typeId', $typeId, PDO::PARAM_INT);
		$stmt->execute();
        $pokemons = $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $pokemons;
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
	 * Get the value of hp
	 *
	 * @return mixed
	 */
	public function getHp()
	{
		return $this->hp;
	}

	/**
	 * Set the value of hp
	 *
	 * @param   mixed  $hp  
	 * @return  self
	 */
	public function setHp($hp)
	{
		$this->hp = $hp;

		return $this;
	}

	/**
	 * Get the value of attack
	 *
	 * @return mixed
	 */
	public function getAttack()
	{
		return $this->attack;
	}

	/**
	 * Set the value of attack
	 *
	 * @param   mixed  $attack  
	 * @return  self
	 */
	public function setAttack($attack)
	{
		$this->attack = $attack;

		return $this;
	}

	/**
	 * Get the value of defense
	 *
	 * @return mixed
	 */
	public function getDefense()
	{
		return $this->defense;
	}

	/**
	 * Set the value of defense
	 *
	 * @param   mixed  $defense  
	 * @return  self
	 */
	public function setDefense($defense)
	{
		$this->defense = $defense;

		return $this;
	}

	/**
	 * Get the value of spe_attack
	 *
	 * @return mixed
	 */
	public function getSpeAttack()
	{
		return $this->spe_attack;
	}

	/**
	 * Set the value of spe_attack
	 *
	 * @param   mixed  $spe_attack  
	 * @return  self
	 */
	public function setSpeAttack($spe_attack)
	{
		$this->spe_attack = $spe_attack;

		return $this;
	}

	/**
	 * Get the value of spe_defense
	 *
	 * @return mixed
	 */
	public function getSpeDefense()
	{
		return $this->spe_defense;
	}

	/**
	 * Set the value of spe_defense
	 *
	 * @param   mixed  $spe_defense  
	 * @return  self
	 */
	public function setSpeDefense($spe_defense)
	{
		$this->spe_defense = $spe_defense;

		return $this;
	}

	/**
	 * Get the value of speed
	 *
	 * @return mixed
	 */
	public function getSpeed()
	{
		return $this->speed;
	}

	/**
	 * Set the value of speed
	 *
	 * @param   mixed  $speed  
	 * @return  self
	 */
	public function setSpeed($speed)
	{
		$this->speed = $speed;

		return $this;
	}

	/**
	 * Get the value of number
	 *
	 * @return mixed
	 */
	public function getNumber()
	{
		return $this->number;
	}

	/**
	 * Set the value of number
	 *
	 * @param   mixed  $number  
	 * @return  self
	 */
	public function setNumber($number)
	{
		$this->number = $number;

		return $this;
	}
}