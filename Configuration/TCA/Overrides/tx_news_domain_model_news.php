<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$tempColumns = array(
	'address' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:newsauthor/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.address',
		'config' => array(
			'type' => 'select',
			'internal_type' => 'db',
			'allowed' => 'tt_address',
			'foreign_table' => 'tt_address',
			'foreign_table_where' => '',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'items' => array(
				array('', 0),
			),
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns, TRUE);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'address');