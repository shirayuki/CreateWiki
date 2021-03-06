<?php
require_once( __DIR__ . '/../../../maintenance/Maintenance.php' );

class CreateWikiListDatabases extends Maintenance {
	public function __construct() {
		parent::__construct();
		$this->mDescription = 'Lists all databases known by the wiki farm.';
	}

	public function execute() {
		global $wgLocalDatabases;

		foreach ( $wgLocalDatabases as $db ) {
			print "$db\n";
		}
	}
}

$maintClass = 'CreateWikiListDatabases';
require_once RUN_MAINTENANCE_IF_MAIN;
