<?php
/**
 * Copyright (C) 2013 Sope
 *
 * @author    Simon Kusterer
 * @copyright Simon Kusterer 2013
 */

namespace Sope\AddressToCoords;

class AddressToCoords
{

	/**
	 * Retrieve LAT / LON Coords using cache first.
	 *
	 * @param $strAddress
	 * @param string $strResolver
	 * @return CoordscacheModel|null
	 */
	public static function resolve($strAddress, $strResolver = 'default')
	{
		$strAddress = trim(strtolower($strAddress));
		$strResolverClass = $GLOBALS['addresstocoords']['resolvers'][$strResolver];
		$objCoords = \CoordscacheModel::findByTerm($strAddress);

		if (is_null($objCoords))
		{
			$objCoords = new \CoordscacheModel();
			$objCoords->term = $strAddress;

			$arrResult = $strResolverClass::resolve($strAddress);

			if (!is_null($arrResult))
			{
				$objCoords->address = $arrResult['address'];
				$objCoords->lat = $arrResult['lat'];
				$objCoords->lon = $arrResult['lon'];
			}

			$objCoords->save();
		}

		if (empty($objCoords->lat) || empty($objCoords->lon))
		{
			return;
		} else
		{
			return $objCoords;
		}
	}

}