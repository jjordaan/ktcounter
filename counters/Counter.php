<?php
abstract class Counter
{
	abstract public function getCount();

	abstract public function updateCount();
}

class ConnectionError extends Exception { }
?>
