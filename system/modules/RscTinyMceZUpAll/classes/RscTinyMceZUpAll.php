<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2016 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2016-2016
 * @author     Cliff Parnitzky
 * @package    RscTinyMceZUpAll
 * @license    LGPL
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace RscTinyMceZUpAll;

/**
* Class RscTinyMceZUpAll
*
* Class to implement the HOOK for adding configs.
* @copyright  Cliff Parnitzky 2016-2016
* @author     Cliff Parnitzky
*/
class RscTinyMceZUpAll {
	
	/**
	 * Adding config for output behavoir
	 */
	public function editTinyMcePluginLoaderConfig ($arrTinyConfig) {
		
		$arrTinyConfig["toolbar1"] = '"newdocument | anchor | link unlink | image | subscript superscript | abbr | searchreplace  | undo redo | removeformat | code",';
		$arrTinyConfig["toolbar2"] = '"formatselect fontsizeselect styleselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | indent outdent",';
		$arrTinyConfig["toolbar3"] = '"table | template | forecolor backcolor | hr pagebreak | blockquote | bullist numlist | youtube | charmap emoticons triathlonicons | fontawesome | insertdatetime",';
		$arrTinyConfig["fontsize_formats"] = '"8px 9px 10px 11px 12px 13px 14px 15px 16px 17px 18px 19px 20px 21px 22px 23px 24px 28px 32px 36px 40px",';
		   
		return $arrTinyConfig;
	}
}
 
?>