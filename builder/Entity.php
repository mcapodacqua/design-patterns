<?php
/**
 * This is an inmutable class, you can only access to the getter methods. 
 * Following the Builder pattern, it needs a Builder object to be created
 * @author Maxi Capodacqua
 */
class Entity {
	
	private $id;
	private $attr1;
	private $attr2;
	private $attr3;
	
	/**
	 * With a private contructor we make it not instanciable, it could 
	 * only be created by a builder. 
	 * Change this function to public doesn't change any behavior in this case. 
	 * But as the object is inmutable, teorically, only a builder can create it
	 * 
	 * @param IEntityBuilder $builder
	 */
	private function __construct(IEntityBuilder $builder){
		$this->id = $builder->getId();
		$this->attr1 = $builder->getAttr1();
		$this->attr2 = $builder->getAttr2();
		$this->attr3 = $builder->getAttr3();
	}
	
	/**
	 * Returns the ID
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Returns the Attr1
	 * @return string
	 */
	public function getAttr1() {
		return $this->attr1;
	}
	
	/**
	 * Returns the Attr2
	 * @return string
	 */
	public function getAttr2() {
		return $this->attr2;
	}
	
	/**
	 * Returns the Attr3
	 * @return string
	 */
	public function getAttr3() {
		return $this->attr3;
	}
	
	/**
	 * Static constructor
	 * @param IEntityBuilder $builder The builder object
	 * @return Entity 
	 */
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