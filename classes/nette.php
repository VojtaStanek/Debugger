<?php
use Nette\Diagnostics\Debugger;
class DebuggerNette implements \DebuggerInterface
{
	
	function __construct($netteLoader)
	{
		require $netteLoader;
		
		Debugger::enable(Debugger::DEVELOPMENT);
	}

	public function dump($value)
	{
		Debugger::barDump($value);
	}
}
