<link rel="stylesheet" type="text/css" href="resources/css/blocks.css" />
<div class=outer>
<?php
	require_once('sdbCounters.php');
	require_once('ConfigManager.inc.php');
	ConfigManager::load('/etc/ktlive.cnf');
	$awscreds = ConfigManager::getSection('aws');
	$key = $awscreds['key'];
	$secret = $awscreds['secret'];
	$counters = new sdbCounters($key, $secret, 'total');
	foreach(array('total', 'trial', 'start', 'pro', 'team', 'com', 'ent') as $aCounter)
	{
		$class = $counters->getCounter($aCounter);
		?>
			<div class=buffer>
				<div id=<?php echo $aCounter; ?> class=block>
					<div class=inner>
						<h2> <?php echo $class->getName(); ?> </h2>
						<?php echo $class->getCount(); ?>
					</div>
				</div>
			</div>
		<?php
	}
?>
</div>

