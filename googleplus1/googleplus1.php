<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  2011 Andreas Koob 
 * @author     Andreas Koob 
 * @package    googleplus1 
 * @license    LGPL 
 * @filesource
 */


/**
 * Class googleplus1 
 *
 * @copyright  2011 Andreas Koob 
 * @author     Andreas Koob 
 * @package    Controller
 */
class googleplus1 extends Frontend
{
	public function addGoogleplusone(Database_Result $objPage, Database_Result $objLayout, PageRegular $objPageRegular)
	{
		if($GLOBALS['TL_CONFIG']['googleplus1_addalways']=="1")
		{
			$strTag='<script type="text/javascript" src="https://apis.google.com/js/plusone.js">';
			if($GLOBALS['TL_CONFIG']['googleplus1_language']!="")
			{
				$strTag.="{lang: '" . $GLOBALS['TL_CONFIG']['googleplus1_language'] . "'}";
			}
			else
			{
				$strTag.="{lang: 'en-US'}";
			}
			$strTag.='</script>';
			$GLOBALS['TL_HEAD'][]=$strTag;
		}
	}
}

?>