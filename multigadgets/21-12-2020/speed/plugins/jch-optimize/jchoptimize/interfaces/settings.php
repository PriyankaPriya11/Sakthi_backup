<?php

/**
 * JCH Optimize - Aggregate and minify external resources for optmized downloads
 * 
 * @author Samuel Marshall <sdmarshall73@gmail.com>
 * @copyright Copyright (c) 2010 Samuel Marshall
 * @license GNU/GPLv3, See LICENSE file
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * If LICENSE file missing, see <http://www.gnu.org/licenses/>.
 */

namespace JchOptimize\Interfaces;

defined('_JCH_EXEC') or die('Restricted access');

interface SettingsInterface
{
        static public function getInstance($params);
        
        public function get($param, $default=NULL);
        
        public function set($param, $value);
        
        public function getOptions();

	/**
	 * Delete a value from the settings object
	 *
	 * @param    mixed    $param    The parameter value to be deleted
	 *
	 * @return   null
	 */
	public function remove($param);
}
