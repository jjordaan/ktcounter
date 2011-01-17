<?php
require_once('config/config.inc.php');
// Cloudfusion library
require_once(HOME . '/lib/thirdparty/cloudfusion/cloudfusion.class.php');
require_once(HOME . '/lib/thirdparty/cloudfusion/sdb.class.php');
require_once('Counter.php');

class sdbCounter extends Counter
{
	/**
         * Simple db object
         *
         * @var object
         */
        private $simpledb = null;
        /**
         * Simple db domain
         *
         * @var string
         */
        private $domain = '';

        /**
         * Constructor
         *
         * @param strin $awsKey
         * @param string $awsSecret
         * @param string $domain
         */
        public function __construct($awsKey, $awsSecret)
        {
                try {
                        $this->simpledb = new AmazonSDB($awsKey, $awsSecret);
                }
                catch (Exception $e) {
                        Logs::error("Simple db failed to initialize : {$e->getMessage()}");
                }
        }

	public function getCount()
	{
		
		throw new ConnectionError("Retrieving Count");
	}

	public function updateCount()
	{

		throw new ConnectionError("Updating Count");
	}

	public function query($query)
	{
		// Create simple db query
		try {
                        $response = $this->simpledb->select($query, null);
                	if($response->isOK()) {
                    		return $response;
                	}
            	}
            	catch (Exception $e) {
                	return false;
            	}

	}
}
?>
