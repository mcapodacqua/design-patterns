<?php
class StrategyB implements IStrategy {
	public function doAction(){
		echo "\nStrategy B doAction()";
	}
	public function doOtherAction(){
		echo "\nStrategy B doOtherAction()";
	}
}