<?php
class ShoppingCart {
	/**
	 * The state of the Shopping cart
	 * @var IShoppingCartState
	 */
	private $state;
	private $product = array();
	
	public function __construct() {
		$this->state = new EmptyCartState($this);
	}
	
	public function setState(IShoppingCartState $state) {
		$this->state = $state;
	}
	
	public function addProduct(array $product) {
		try{
			$this->state->addProduct($product);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	public function getProducts() {
		return $this->state->getProducts();
	}
	public function getTotal() {
		return $this->state->getTotal();
	}
	
	public function getStateName() {
		return get_class($this->state);
	}
}