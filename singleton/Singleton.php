<?php
/**
 * This simple class represent the <i>Singleton</i> pattern. 
 * The idea is to create always only one instance. In the first call 
 * of the class it should create the instance, in the other calls, it should always returns the
 * same instance. 
 * This pattern allow us to create a <b>Super Global object</b>, it means that 
 * every Singleton object could be accessible from every client, if a client change the 
 * status of this Singleton, it could impact in other clients.
 * 
 * @author Maxi Capodacqua
 */
class Singleton {
	/**
	 * A test attribute to show the behavior
	 * @var int
	 */
	private $attr;
	
	/**
	 * An static attribute. 
	 * Here is the magic, this attribute is the only instance of the 
	 * object, and the only way to get access to it is with <i>Singleton::getInstance()</i>
	 * 
	 * @var Singleton
	 */
	private static $instance = null;
	
	/**
	 * A private constructor!
	 * This is really important to implement this pattern, if the constructor 
	 * is public, every client could create different instance of the object.
	 * You can initialize the attributes here.
	 */
	private function __construct() {
		$this->attr = 0;
	}
	
	/**
	 * This is the only way to have access to the instance. 
	 * This method should create the singleton instance if it is neccesary.
	 * If not, it should return the static instance
	 * 
	 * @return Singleton
	 */
	public static function getInstance() {
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	/**
	 * Sets an attribute of the object for testing purposes
	 * @param int $val
	 */
	public function setAttr($val) {
		$this->attr = $val;
	}
	
	/**
	 * Returns the value of the test attribute
	 * @return int
	 */
	public function getAttr() {
		return $this->attr;
	}
}