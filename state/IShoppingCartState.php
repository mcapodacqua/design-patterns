<?php
interface IShoppingCartState {
	const PRODUCT_NAME = 'product.name';
	const PRODUCT_VALUE = 'product.value';
	const MAX_PRODUCT_QUANTITY = 3;
	
	public function getProducts();
	public function addProduct(array $product);
	public function getTotal();
}