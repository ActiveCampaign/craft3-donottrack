<?php
/**
 * Do Not Track plugin for Craft CMS 3.x
 *
 * Helpers for respecting Do Not Track headers sent by browsers.
 *
 * @link      https://wildbit.com
 * @copyright Copyright (c) 2018 Wildbit
 */

namespace wildbit\donottrack\services;

use wildbit\donottrack\DoNotTrack;

use Craft;
use craft\base\Component;

/**
 * @author    Wildbit
 * @package   DoNotTrack
 * @since     1.0.0
 */
class DoNotTrackService extends Component
{
    // Public Methods
    // =========================================================================

    public function isEnabled()
    {
        return (isset($_SERVER['HTTP_DNT']) && $_SERVER['HTTP_DNT'] == 1);
    }
}
