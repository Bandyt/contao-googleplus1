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
 * Table tl_settings 
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{googleplus1settings},googleplus1_language,googleplus1_addalways';

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['googleplus1_language'] = array(
	'label'		=>	&$GLOBALS['TL_LANG']['tl_settings']['googleplus1_language'],
	'exclude'	=>	true,
	'inputType'	=> 'select',
	'default'   => 'en-US',
	'options'	=> array('ar','bg','ca','zh-CN','zh-TW','hr','cs','da','nl','en-GB','en-US','et','fil','fi','fr','de','el','iw','hi','hu','id','it','ja','ko','lv','lt','ms','no','fa','pl','pt-BR','pt-PT','ro','ru','sr','sk','sl','es','es-419','sv','th','tr','uk','vi'),
	'reference'	=> &$GLOBALS['TL_LANG']['tl_settings']['googleplus1_language']['reference'],
	'eval'		=> array('mandatory'=>true)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['googleplus1_addalways'] = array(
	'label'		=>	&$GLOBALS['TL_LANG']['tl_settings']['googleplus1_addalways'],
	'exclude'	=>	true,
	'inputType'	=> 'checkbox',
	'eval'		=> array()
);
?>