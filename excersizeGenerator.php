<?php
class excersizeGenerator
{
	function __constuct($historyManager,$params=null)
	{
		$this->historyManager=$historyManager;
		$this->params=$params;

	}
	function generate()
	{

	}
	function getHistory()
	{

	}
	function isNew()
	{
		if($this->historyManager->wasUsed($this->getExcersize()))
			return false;
		return true;
	}
}