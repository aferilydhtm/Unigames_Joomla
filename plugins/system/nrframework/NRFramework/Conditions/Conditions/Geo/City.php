<?php

/**
 *  @author          Tassos Marinos <info@tassos.gr>
 *  @link            http://www.tassos.gr
 *  @copyright       Copyright © 2021 Tassos Marinos All Rights Reserved
 *  @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
*/

namespace NRFramework\Conditions\Conditions\Geo;

defined('_JEXEC') or die;

class City extends GeoBase
{
    /**
     *  Returns the assignment's value
     * 
     *  @return string City name
     */
	public function value()
	{
		return $this->geo->getCity();
	}
}