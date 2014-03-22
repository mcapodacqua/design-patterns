<?php
class Client {
	
	private $strategy;
	
	public function __construct(IStrategy $strategy = null) {
		if ($strategy) {
			$this->strategy = $strategy;
		} else {
			$this->strategy = new StrategyA();	//Default strategy
		}
	}
	
	public function setStrategy(IStrategy $strategy) {
		$this->strategy = $strategy;
	}
	
	public function doAction() {
		$this->strategy->doAction();
	}
	
	public function doOtherAction() {
		$this->strategy->doOtherAction();
	}
}