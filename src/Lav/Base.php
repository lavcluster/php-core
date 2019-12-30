<?php namespace Lav;

/**
 * 
 * 
 * @class
 */
class Base{
	
	public static
		$instance = null;
		
	private
	    $encapsulated_data = array();
		
	/**
	 * 
	 *  
	 * @static
	 * @method
	 * 
	 * @param name
	 */
	static function prefix(string $name){
		return static::class .'_' .$name;
	}
	
	/**
	 * 
	 *  
	 * @static
	 * @method
	 * 
	 * @param value
	 */
	static function is_instance($value){
		return $value instanceof static;
	}
	
	/**
	 * 
	 * @static
	 * @method
	 * 
	 * @param config
	 * @param save_in_class
	 */
	static function action_initialize($config, $save_in_class = true){
		if( $save_in_class ){
			if( !static::is_instance(static::$instance) )
				static::$instance = new static($config);
			
			$instance = static::$instance;
		}else{
			$instance = new static($config);
		}
		
		return $instance;
	}
	
	/**
	 * 
	 * @static
	 * @method
	 * 
	 * @param key
	 * @param value
	 */
	private function data($key, $value = null){
	    if( func_num_args() == 2 ){
	        $this->encapsulated_data[$key] = $value;
	    }
	    
	    return $this->encapsulated_data[$key];
	}
	
	/**
	 * 
	 * @param config
	 */
	public function __construct($config = null){
	    
	}	
	
}