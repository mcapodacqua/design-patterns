<?php
/**
 * This interface represent the common protocol between all of the Strategies
 * 
 * @author Maxi Capodacqua
 */
interface IStrategy {
	/**
	 * Test method. 
	 * It could be any behavior of the Strategy
	 * 
	 */
	public function doAction();
	/**
	 * Other Test method.
	 */
	public function doOtherAction();
}