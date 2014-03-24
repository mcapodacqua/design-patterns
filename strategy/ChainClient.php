<?php
/**
 * This Client class use the different Strategies based on the actions 
 * improved. 
 * It is an example that shows that you can use this pattern to specify 
 * a collection of Strategies based on which do you need, and the order how 
 * the methods are called.
 * 
 * @author Maxi Capodacqua
 */
class ChainClient {
	
	/**
	 * Strategy used by the Client
	 * @var IStrategy
	 */
	private $strategy;
	
	/**
	 * You can set the strategy in the constructor (optionally fo'sho!).
	 *
	 * @param IStrategy $strategy
	 */
	public function __construct(IStrategy $strategy = null) {
		if ($strategy) {
			$this->strategy = $strategy;
		} else {
			$this->strategy = new StrategyA();	//Default strategy
		}
	}
	
	/**
	 * Sets the Strategy to be used in the Client
	 * @param IStrategy $strategy
	 */
	public function setStrategy(IStrategy $strategy) {
		$this->strategy = $strategy;
	}
	
	/**
	 * Delegate the method to the Strategy and the Strategy
	 */
	public function doAction() {
		$this->strategy->doAction();
		$this->strategy = new StrategyB();
	}
	
	/**
	 * Delegate the method to the Strategy and the Strategy
	 */
	public function doOtherAction() {
		$this->strategy->doOtherAction();
		$this->strategy = new StrategyA();
	}
}