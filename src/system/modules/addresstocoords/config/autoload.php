<?php
/**
 * Copyright (C) 2013 Sope
 *
 * @author    Simon Kusterer
 * @copyright Simon Kusterer 2013
 */

ClassLoader::addClasses(array
(
	'Sope\AddressToCoords\AddressToCoords' => 'system/modules/addresstocoords/classes/AddressToCoords.php',
	'Sope\AddressToCoords\IResolver' => 'system/modules/addresstocoords/classes/IResolver.php',
	'Sope\AddressToCoords\GoogleMapsResolver' => 'system/modules/addresstocoords/classes/GoogleMapsResolver.php',
	'CoordscacheModel' => 'system/modules/addresstocoords/models/CoordscacheModel.php',
));