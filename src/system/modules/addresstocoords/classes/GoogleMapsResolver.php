<?php
/**
 * Copyright (C) 2013 Sope
 *
 * @author    Simon Kusterer
 * @copyright Simon Kusterer 2013
 */

namespace Sope\AddressToCoords;

class GoogleMapsResolver implements IResolver
{

	/**
	 * @param $strAddress
	 * @return null|array
	 */
	public static function resolve($strAddress)
	{
		$strResponse = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.urlencode($strAddress).'&sensor=false');

		if ($strResponse === false)
		{
			return;
		}

		$objResponse = json_decode($strResponse);

		if ($objResponse->status != 'OK')
		{
			return;
		}

		return array
		(
			'lat' => $objResponse->results[0]->geometry->location->lat,
			'lon' => $objResponse->results[0]->geometry->location->lng
		);
	}

}