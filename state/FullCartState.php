<?php
class FullCartState implements IShoppingCartState {
	private $products = array();
	private $cart = null;
	
	public function __construct(ShoppingCart $cart) {
		$this->cart = $cart;
	}
	
	public function getProducts() {
		return $this->products;
	}
	
	public function addProduct(array $product) {
		throw new Exception("The cart is fully!!"); //You can't add product on this cart, you can throw an exception here
	}
	
	public function getTotal() {
		$total = 0 ;
		foreach ($this->products as $product) {
			$total += $product[self::PRODUCT_VALUE];
		}
		return $total;
	}
	
	/**
	 * Helper function that sets the array of the product to this state.
	 * 
	 * @param array $products
	 */
	public function setProducts(array $products) {
		$this->products = $products;
	}
}