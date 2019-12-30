<?php namespace Lav\Type;
/**
 * 
 * 
 * @class
 */
class Base extends Lav\Base{


	/**
	 * 
	 * @static
	 * @method
	 */
	static function parse($config){
		return new static($config);
	}
	
	/**
	 * 
	 * @param config
	 */
	public function __construct($config = null){
		parent::__construct($config);
	}

}