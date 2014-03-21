<?php
/**
 * This Builder is a small example of a simple builder object. 
 * As I'm not using any conection with a database, this only works with
 * non persistent data. 
 * But the idea is to create multiple builders for different transactions.
 * <p>
 * 	IE: you can create a InsertEntityBuilder, this should implements 
 * 	<i>IEntityBuilder</i> and in the method <i>InsertEntityBuilder::build()</i> insert a row
 * 	in the database and finally creates the Entity. The same idea for <i>UpdateEntityBuilder</i>. 
 * <p>
 * <p>
 * 	You can add require fields in the constructor of your builder, for example, 
 * 	if your builder most search based in a ID.
 * </p>
 * 
 * @author Maxi Capodacqua
 */
class EntityBuilder implements IEntityBuilder{
	
	private $id;
	private $attr1;
	private $attr2;
	private $attr3; 
	
	public function getId() {
		return $this->id;
	}
	
	public function getAttr1() {
		return $this->attr1;
	}
	
	public function getAttr2() {
		return $this->attr2;
	}
	
	public function getAttr3() {
		return $this->attr3;
	}
	
	public function id($id) {
		$this->id = $id;
		return $this;
	}
	public function attr1($attr){ 
		$this->attr1 = $attr;
		return $this;
	}
	public function attr2($attr) {
		$this->attr2 = $attr;
		return $this;
	}
	public function attr3($attr) {
		$this->attr3 = $attr;
		return $this;
	}
	
	/**
	 * Creates a new Entity with the respective data
	 * 
	 * <i>This method could made any logic with the database, 
	 * like, insert the new object, search for the object based on the attributes, 
	 * or updates the object.</i> 
	 * 
	 * @see IBuilder::build()
	 * @return Entity
	 */
	public function build() {
		return Entity::create($this);
	}
}