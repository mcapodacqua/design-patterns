<?php
/**
 * Client class. 
 * It should delegate the behavior to a Strategy.
 * As you can see, you can set a Strategy on the constructor or 
 * set the strategy with the <b>Client::setStrategy(IStrategy $strategy)</b>. 
 * But you can also instance different strategies based on status of the client.
 * Remeber that when we talked about status, we talk about the collection of the attributes of
 * the class.
 * 
 * @author Maxi Capodacqua
 */
class Client {
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
	 * Delegate the method to the Strategy
	 */
	public function doAction() {
		$this->strategy->doAction();
	}
	
	/**
	 * Delegate the method to the Strategy
	 */
	public function doOtherAction() {
		$this->strategy->doOtherAction();
	}
}