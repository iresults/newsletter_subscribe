<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "store"
 *
 * Auto generated by Extension Builder 2013-10-21
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'subscribe',
	'description' => 'subscribe and unsubscribe to tt_address, generate static Link to unsubscribe (to use in Newsletter)',
	'category' => 'plugin',
	'author' => 'Gregor Agnes',
	'author_email' => 'ga@zwo3.de',
	'author_company' => 'Gregor Agnes & Markus Cousin GbR',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '1',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '9.5.0-9.5.99',
            'tt_address' => '4.0.0-4.99.99'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

