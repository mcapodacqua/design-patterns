<?php
/**
 * A builder Interface of an Entity Builder. 
 * The idea of this interface is to create a common protocol 
 * between Builders. 
 * You can create more than one Builder for an object
 * and those should implements this interface
 * 
 * @author Maxi Capodacqua
 */
interface IEntityBuilder extends IBuilder{
	/**
	 * Returns the ID
	 * @return int
	 */
	public function getId();
	/**
	 * Returns the Attr1
	 * @return string
	 */
	public function getAttr1();
	/**
	 * Returns the Attr2
	 * @return string
	 */
	public function getAttr2();
	/**
	 * Returns Attr3
	 * @return string
	 */
	public function getAttr3();
	/**
	 * Sets the ID and the returns the instance
	 * @param int $id
	 * @return IEntityBuilder
	 */
	public function id($id);
	/**
	 * Sets the Attr1 and the returns the instance
	 * @param string $attr
	 * @return IEntityBuilder
	 */
	public function attr1($attr);
	/**
	 * Sets the Attr2 and the returns the instance
	 * @param string $attr
	 * @return IEntityBuilder
	 */
	public function attr2($attr);
	/**
	 * Sets the Attr3 and the returns the instance
	 * @param string $attr
	 * @return IEntityBuilder
	 */
	public function attr3($attr);
	
}