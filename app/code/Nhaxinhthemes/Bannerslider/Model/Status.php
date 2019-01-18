<?php
/**
* Copyright © 2015 portfolio.ken-nguyen.net. All rights reserved.

* @author Ken Nguyen <teogk89@gmail.com>
*/

namespace Plazathemes\Bannerslider\Model;

class Status {
	const STATUS_ENABLED = 1;
	const STATUS_DISABLED = 2;

	/**
	 * get available statuses
	 * @return []
	 */
	public static function getAvailableStatuses() {
		return [
			self::STATUS_ENABLED => __('Enabled')
			, self::STATUS_DISABLED => __('Disabled'),
		];
	}
}
