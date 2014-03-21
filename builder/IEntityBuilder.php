<?php
interface IEntityBuilder extends IBuilder{
	public function getId();
	public function getAttr1();
	public function getAttr2();
	public function getAttr3();
	
	public function id($id);
	public function attr1($attr);
	public function attr2($attr);
	public function attr3($attr);
	
}