<?php
/**
 * Specific Strategy implementing the Strategy Interface. 
 * It should has the bussiness logic to do the behavior from the common 
 * protocol.
 * 
 * @author Maxi Capodacqua
 */
class StrategyA implements IStrategy {
	public function doAction(){
		echo "\nStrategy A doAction()";
	}
	public function doOtherAction(){
		echo "\nStrategy A doOtherAction()";
	}
}