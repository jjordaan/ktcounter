<?php
class sdbCounters
{
	private $key=null;
	private $secret=null;

	public function __construct($key, $secret)
	{
		$this->key=$key;
		$this->secret=$secret;
	}

	public function getCounter($counter)
	{
		require_once("counters/$counter" . 'Counter.php');
		$class = $counter . "Counter";
		return new $class($this->key, $this->secret);
	}
}
?>
