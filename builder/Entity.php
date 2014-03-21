<?php
class Entity {
	
	private $id;
	private $attr1;
	private $attr2;
	private $attr3;
	
	private function __construct(IEntityBuilder $builder){
		$this->id = $builder->getId();
		$this->attr1 = $builder->getAttr1();
		$this->attr2 = $builder->getAttr2();
		$this->attr3 = $builder->getAttr3();
	}
	
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
	
	public static function create(IEntityBuilder $builder) {
		return new self($builder);
	}
	
	
	public function __toString() {
		$string = "Attr1=" . $this->attr1;
		$string .= "\nAttr2=" . $this->attr2;
		$string .= "\nAttr3=" . $this->attr3;
		$string .= "\nId=" . $this->id;
		
		return $string;
	}
}