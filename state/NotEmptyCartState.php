<?php
class NotEmptyCartState implements IShoppingCartState {
	
	private $products = array();
	private $cart = null;
	
	public function __construct(ShoppingCart $cart) {
		$this->cart = $cart;
	}
	
	public function getProducts() {
		return $this->products;
	}
	public function addProduct(array $product) {
		$this->products[] = $product;
		if (count($this->products) === self::MAX_PRODUCT_QUANTITY) {
			$fullCart =  new FullCartState($this->cart);
			$this->cart->setState($fullCart);
			$fullCart->setProducts($this->products);
		}
	}
	public function getTotal() {
		$total = 0 ;
		foreach ($this->products as $product) {
			$total += $product[self::PRODUCT_VALUE];
		}
		return $total;
	}
}