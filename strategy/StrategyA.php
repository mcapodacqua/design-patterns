<?php
class StrategyA implements IStrategy {
	public function doAction(){
		echo "\nStrategy A doAction()";
	}
	public function doOtherAction(){
		echo "\nStrategy A doOtherAction()";
	}
}