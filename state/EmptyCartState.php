<?php

class EmptyCartState implements IShoppingCartState {
	
	private $products = array();
	private $cart = null;
	
	public function __construct(ShoppingCart $cart) {
		$this->cart = $cart;
	}
	public function getProducts() {
		return $this->products;
	}
	public function addProduct(array $product) {
		$discountedProduct = $product;
		$discountedProduct[self::PRODUCT_VALUE] -= $discountedProduct[self::PRODUCT_VALUE] * 10 / 100; //10% of discount in the first product
		$notEmptyState = new NotEmptyCartState($this->cart);
		$this->cart->setState($notEmptyState);
		$this->cart->addProduct($discountedProduct);
	}
	public function getTotal() {
		return 0;
	}
}