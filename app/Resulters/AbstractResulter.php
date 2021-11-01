<?php 
namespace App\Resulters;

use ArrayAccess;

abstract class AbstractResulter implements ArrayAccess{
	
	protected $data = [];

	public $rawResult;

	public function __construct($rawResult)
	{
		$this->rawResult = $rawResult;
	}

	public function setRaw($result)
	{
		$this->rawResult = $result;
	}


	public function raw()
	{
		return $this->rawResult;
	}

	/**
	 * Zwraca wynik tenowy
	 * @return [type] [description]
	 */
	public function ten() : int
	{
		$results = $this->result();

		return $results['ten'];
	}

	/**
	 * Zwraca centyl
	 * @return [type] [description]
	 */
	public function centyl() : int
	{
		$results = $this->result();

		return $results['centyl'];
	}

	/**
	 * Zwraca klasyfikację
	 * @return [type] [description]
	 */
	public function class() : string
	{ 
		$results = $this->result();

		return $results['class'];
	}

	/**
	 * Zwraca tablicę wyników dla wyniku surowego
	 * @return [type] [description]
	 */
	public function result()
	{
		return $this[$this->rawResult];
	}

	// Array access methods

	public function offsetExists($offset) : bool
	{
		if($offset < 0){
			return false;
		}

		return true;
	}

	public function offsetGet($offset)
	{
		if(isset($this->data[$offset])){
			return $this->data[$offset];
		}
		
		$lastValue = null;

		foreach ($this->data as $key => $value) {
			if($key >= $offset){
				return $value;
			}

			$lastValue = $value;
		}
	}

	public function offsetSet($offset, $value)
	{
		// do nothing
	}

	public function offsetUnset($offset)
	{
		// do nothing
	}

}