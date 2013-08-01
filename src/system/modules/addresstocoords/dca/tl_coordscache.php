<?php
/**
 * Copyright (C) 2013 Sope
 *
 * @author    Simon Kusterer
 * @copyright Simon Kusterer 2013
 */

$GLOBALS['TL_DCA']['tl_coordscache'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => false,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'term' => 'index'
			)
		)
	),

	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),

		'term' => array
		(
			'sql'                     => "varchar(255) NOT NULL"
		),

		'lat' => array
		(
			'sql'                     => "double unsigned NOT NULL default '0'"
		),

		'lon' => array
		(
			'sql'                     => "double unsigned NOT NULL default '0'"
		),

		'address' => array
		(
			'sql'                     => "varchar(255) NOT NULL"
		),

	)
);
