<?php
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
	 * 
	 * @return Entity
	 */
	public function build() {
		return Entity::create($this);
	}
}