<?php
/**
 * Specific Strategy implementing the Strategy Interface.
 * It should has the bussiness logic to do the behavior from the common
 * protocol.
 *
 * @author Maxi Capodacqua
 */
class StrategyB implements IStrategy {
	public function doAction(){
		echo "\nStrategy B doAction()";
	}
	public function doOtherAction(){
		echo "\nStrategy B doOtherAction()";
	}
}