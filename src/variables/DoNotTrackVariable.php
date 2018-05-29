<?php
/**
 * Do Not Track plugin for Craft CMS 3.x
 *
 * Helpers for respecting Do Not Track headers sent by browsers.
 *
 * @link      https://wildbit.com
 * @copyright Copyright (c) 2018 Wildbit
 */

namespace wildbit\donottrack\variables;

use wildbit\donottrack\DoNotTrack;

use Craft;

/**
 * @author    Wildbit
 * @package   DoNotTrack
 * @since     1.0.0
 */
class DoNotTrackVariable
{
    // Public Methods
    // =========================================================================

    public function isEnabled()
    {
        return DoNotTrack::$plugin->doNotTrackService->isEnabled();
    }
}
