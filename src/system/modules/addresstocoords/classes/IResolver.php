<?php
/**
 * Copyright (C) 2013 Sope
 *
 * @author    Simon Kusterer
 * @copyright Simon Kusterer 2013
 */

namespace Sope\AddressToCoords;

interface IResolver
{

	/**
	 * @param $strAddress
	 * @return null|array
	 */
	public static function resolve($strAddress);

}