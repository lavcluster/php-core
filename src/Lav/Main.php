<?php namespace Lav;

/**
 * 
 * 
 * @class
 */
class Main extends Base{
	
	public static
		$instance = null;
		
	public const
		DB_PREFIX = "lav_",
		
		KEY_FILE = "file";
	
	/**
	 * 
	 * @static
	 * @method
	 * 
	 * @param table_name
	 */
    static function db_prefix(string $table_name){
        return self::DB_PREFIX .$table_name;
	}
	
	/**
	 * 
	 * @public
	 * @method
	 */
	public function get_file(){
		$file = $this->data( self::KEY_FILE );
		
		return $file;
	}
	
	/**
	 * 
	 * @public
	 * @method
	 * 
	 * @param src
	 */
	public function get_dirname(string $src = ""){
		$file = $this->data( self::KEY_FILE );
		$dirname = dirname($file);
		$dirname .= $src;
		
		return $dirname;
	}
	
	/**
	 * 
	 * @param config
	 */
	public function __construct($config = null){
		$config = (array) $config;
			
		if( isset($config[ self::KEY_FILE ]) ){
			$this->data( self::KEY_FILE, $config[ self::KEY_FILE ] );
		}
		
		parent::__construct($config);
	}	
	
}