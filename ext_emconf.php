<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'tt_address as news location',
	'description' => 'Add a relation to tt_address to select an address as news location.',
	'category' => 'be',
	'author' => 'Gerald Aistleitner',
	'author_email' => '',
	'author_company' => 'SIWA Online GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '',
			'fluid' => '',
			'typo3' => '6.2.12-7.9.99',
			'news' => '3.2.0',
			'tt_address' => '3.*'
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);