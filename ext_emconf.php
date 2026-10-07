<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'MT Menus',
	'description' => 'This TYPO3 extension provides menu content elements with images for pages and subpages.',
	'category' => 'fe',
	'author' => 'Markus Timtner',
	'author_email' => 'markus@timtner.tech',
	'author_company' => 'https://timtner.tech',
	'version' => '14.0.0',
	'state' => 'stable',
	'constraints' => [
		'depends' => [
			'php' => '8.2.0-8.5.99',
			'typo3' => '13.4.0-14.9.99',
			'frontend' => '13.4.0-14.9.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
