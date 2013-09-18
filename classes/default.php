<?php
class DebuggerDefault implements \DebuggerInterface
{
	
	function __construct()
	{
	}

	public function dump($value)
	{
		var_dump($value);
	}
}