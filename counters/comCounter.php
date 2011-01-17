<?php
require_once('sdbCounter.php');

class comCounter extends sdbCounter
{
	public function getCount()
	{
		$query = "SELECT count(*) from KTLiveAccounts where stopword is null and creation_date is not null and account_status = 'enabled'and account_type='live' and plan='company'";
		$results = $this->query($query);

		return ((string) $results->body->SelectResult->Item->Attribute->Value);
	}

	public function updateCount()
	{

	}
	
	public function getName()
	{
		return "Company";
	}
}

?>
